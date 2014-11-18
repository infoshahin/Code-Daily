using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Data.SqlClient;
using System.Drawing;
using System.IO;
using System.Linq;
using System.Text;
using System.Text.RegularExpressions;
using System.Windows.Forms;
using Newtonsoft.Json;
using Formatting = Newtonsoft.Json.Formatting;

namespace CrownCementJson
{
    public partial class Form1 : Form
    {
        Timer refreshFormTimer = new Timer();
        DBConnection newDBConnection = new DBConnection();
        public string searchTable = string.Empty;
        public Form1()
        {
            InitializeComponent();
            refreshFormTimer.Interval = 1000 *3; //60 seconds.
            refreshFormTimer.Tick += new EventHandler(refreshFormTimer_Tick);
            refreshFormTimer.Enabled = false;
        }

        private void refreshFormTimer_Tick(object sender, EventArgs e)
        {
            showStatusListView.Clear();
            dbToJson();
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            stopAllButton.Enabled = false;
        }
        public void dbToJson()
        {
            //Getting Lines as Array from textFileParsed Method
            string[] tbNames;
            string[] colNames;
            textFileParsed(out tbNames, out colNames);
            //MessageBox.Show(tbNames.Length.ToString());
            for (int i = 0; i < tbNames.Length; i++)
            {
                ////Getting the Table names from Line String
                //string[] arrData = lineAsArray[i].Split(',');
                //string tbName = arrData[0];

                ////Getting the Columns from Line String
                //string colNames = String.Join(",", arrData, 1, arrData.Length - 1);

                //MessageBox.Show(colNames[i]);
                string query = "SELECT " + colNames[i] + " FROM " + tbNames[i];
                //string query = "SELECT xcus,xduescon,xduesrec,[case] FROM transaction_table";
                //string query = "SELECT " + colNames[i] + " FROM " + tbNames[i];
                showDbStatus.Text = newDBConnection.ConnectToDatabase();

                //Creating a data table that will need to convert DataTable to JSON
                DataTable table = new DataTable();

                using (SqlCommand cmd = new SqlCommand(query, newDBConnection.conn))
                {
                    try
                    {
                        using (SqlDataAdapter adapt = new SqlDataAdapter(cmd))
                        {
                            try
                            {
                                if (adapt == null)
                                {
                                    writeFailedMessage("Adapdater Can't Load any data in Table: " + tbNames[i]);
                                }
                                else
                                {
                                    adapt.Fill(table);
                                    int cur_count = table.Rows.Count;

                                    if (table.Rows.Count == 0)
                                    {
                                        writeFailedMessage("No data in Table: " + tbNames[i]);
                                        string jsonDir = CreateDirectory("JSON");
                                        File.WriteAllText(jsonDir + tbNames[i] + ".json", "");
                                    }
                                    else
                                    {
                                        //Getting the JSON Serialize data from Method DataTable to JSON declared below
                                        string result = DataTableToJSON(table, tbNames[i]);

                                        //Creating the JSON file as the Table Name in Directory Declared below in CreateDirectory
                                        string jsonDir = CreateDirectory("JSON");
                                        File.WriteAllText(jsonDir + tbNames[i] + ".json", result);

                                        string update = table.Rows.Count.ToString();//updateCount(tbNames[i], cur_count);
                                        //MessageBox.Show(update);
                                        writeSuccessMessage("JSON data created successfully with table: " + tbNames[i] + " & Inserted:" + update + " Rows");
                                        string message = "Success";
                                        if (showStatusListView.Columns.Count == 0 || showStatusListView.Columns.Count < 2)
                                        {
                                            showStatusListView.AutoArrange = true;
                                            showStatusListView.Columns.Add("tablename");
                                            showStatusListView.Columns.Add("status");
                                            for (var j = 0; j < showStatusListView.Columns.Count; j++)
                                            {
                                                showStatusListView.Columns[j].Width = 150;
                                                showStatusListView.Columns[j].TextAlign = HorizontalAlignment.Center;
                                            }
                                        }
                                        showStatusListView.Items.Add(tbNames[i]).SubItems.Add(message);
                                    }
                                }
                            }
                            catch (Exception ex)
                            {
                                writeFailedMessage(ex.Message.ToString());
                            }
                        }

                    }
                    catch (Exception ex)
                    {
                        //MessageBox.Show(ex.Message);
                        writeFailedMessage("Invalid table name or Original Message: " + ex.Message.ToString());
                    }
                }
                newDBConnection.Disconnect();
            }
            writeTimerLogMessage("Timer run at: ");
        }






        public static string DataTableToJSON(DataTable table, string tableName)
        {
            var list = new List<Dictionary<string, object>>();
            Dictionary<string, List<Dictionary<string, object>>> myList = new Dictionary<string, List<Dictionary<string, object>>>();
            myList.Add(tableName, list);

            foreach (DataRow row in table.Rows)
            {
                var dict = new Dictionary<string, object>();

                foreach (DataColumn col in table.Columns)
                {
                    dict[col.ColumnName] = row[col];
                }
                list.Add(dict);
            }

            string json = JsonConvert.SerializeObject(myList, Formatting.Indented);
            return json;
        }

        //private DataTable ConvertList_To_Datatable(DataTable dtTable, ListView lvDetails)
        //{
        //    if (lvDetails.Items.Count < 1)
        //    {
        //        return dtTable;
        //    }
        //    else
        //    {
        //        for (int ncount = 0; ncount <= lvDetails.Columns.Count - 1; ncount++)
        //        {
        //            DataColumn dtColumn = new DataColumn(lvDetails.Columns[ncount].Text);
        //            dtTable.Columns.Add(dtColumn);
        //        }
        //    }
        //    for (int nRowCount = 0; nRowCount <= lvDetails.Items.Count - 1; nRowCount++)
        //    {
        //        DataRow dtRow = dtTable.NewRow();
        //        for (int nItem = 0; nItem <= lvDetails.Items[nRowCount].SubItems.Count - 1; nItem++)
        //        {
        //            dtRow[lvDetails.Columns[nItem].Text] = lvDetails.Items[nRowCount].SubItems[nItem].Text;

        //        } dtTable.Rows.Add(dtRow);

        //    } return dtTable;

        //}


        public void textFileParsed(out string[] tablename, out string[] columns)
        {
            string[] lines = parseTextFile();
            List<string> tables = new List<string>();
            List<string> column = new List<string>();
            try
            {
                if (searchTable != "")
                {
                    int searchKey = Array.IndexOf(lines, lines.Where(x => x.Contains("(" + searchTable + ")")).FirstOrDefault());
                    string table = lines[searchKey].Split(new char[] { '(', ')' })[1];
                    //string regex = "(\".*\")|('.*')|(\\(.*\\))";\(([^()]|(?R))*\)
                    string regex = "(\\[.*\\])|(\".*\")|('.*')|(\\(.*\\))";
                    string output = Regex.Replace(lines[searchKey], regex, "");
                    tables.Add(table);
                    column.Add(output);
                }
                else
                {
                    for (int i = 0; i < lines.Length; i++)
                    {

                        string table = lines[i].Split(new char[] { '(', ')' })[1];
                        string regex = "(\\[.*\\])|(\".*\")|('.*')|(\\(.*\\))";
                        string output = Regex.Replace(lines[i], regex, "");
                        tables.Add(table);
                        column.Add(output);
                    }
                }
            }
            catch (Exception exception)
            {
                string exMessage = exception.Message;
                writeFailedMessage(exMessage);
            }
            tablename = tables.ToArray();
            columns = column.ToArray();
        }

        public string[] parseTextFile()
        {
            string path = System.IO.Path.GetDirectoryName(System.Windows.Forms.Application.ExecutablePath);
            StreamReader reader = File.OpenText(path+"\\"+"data.txt");
            string line;
            List<string> dataList = new List<string>();

            while ((line = reader.ReadLine()) != null)
            {
                dataList.Add(line);
            }
            string[] items = dataList.ToArray();
            return items;
        }

        public string CreateDirectory(string folderName)
        {
            string path = System.IO.Path.GetDirectoryName(System.Windows.Forms.Application.ExecutablePath);
            string directory = path+"\\" + folderName + "\\";
            if (!Directory.Exists(directory))
            {
                Directory.CreateDirectory(directory);
            }
            return directory;
        }

        public void writeSuccessMessage(string msg)
        {
            string sucLogDir = CreateDirectory("Log\\Success\\");
            TextWriter logTextWriter = new StreamWriter(sucLogDir + "success_log.txt", true);
            logTextWriter.WriteLine(DateTime.Now + " ==> " + msg);
            logTextWriter.Close();
        }
        public void writeFailedMessage(string msg)
        {
            string sucLogDir = CreateDirectory("Log\\Failed\\");
            TextWriter logTextWriter = new StreamWriter(sucLogDir + "failed_log.txt", true);
            logTextWriter.WriteLine(DateTime.Now + " ==> " + msg);
            logTextWriter.Close();
        }
        //public void writeUpdateMessage(string msg)
        //{
        //    string sucLogDir = CreateDirectory("Log\\UpdateStatus\\");
        //    TextWriter logTextWriter = new StreamWriter(sucLogDir + "update_log.txt", true);
        //    logTextWriter.WriteLine(DateTime.Now + " ==> " + msg);
        //    logTextWriter.Close();
        //}

        public void writeTimerLogMessage(string msg)
        {
            if (refreshFormTimer.Enabled)
            {
                string sucLogDir = CreateDirectory("Log\\TimerLog\\");
                TextWriter logTextWriter = new StreamWriter(sucLogDir + "timer_log.txt", true);
                logTextWriter.WriteLine(msg + " ==> " + DateTime.Now);
                logTextWriter.Close();
            }
        }

        //public string updateCount(string tableName, int Count)
        //{
        //    int newCount;
        //    CreateUpdateTable();
        //    //MessageBox.Show(tableName);

        //    int res = prevCount(tableName);
        //    if (res != 0)
        //    {
        //        newCount = Count - res;
        //    }
        //    else
        //    {
        //        newCount = Count - res;
        //    }

        //    insertData(tableName, Count);

        //    return newCount.ToString();
        //}
        //private void CreateUpdateTable()
        //{
        //    using (SqlCommand cc = new SqlCommand("IF NOT EXISTS ( SELECT 1 FROM sys.tables WHERE name LIKE '#updateCount%') CREATE TABLE updateCount(id INT NOT NULL IDENTITY, table_name NVARCHAR(50), count INT, PRIMARY KEY (id))", newDBConnection.conn))
        //    {
        //        try
        //        {
        //            cc.ExecuteNonQuery();
        //            //MessageBox.Show("Success");
        //        }
        //        catch (Exception ex)
        //        {
        //            //MessageBox.Show(ex.Message);
        //        }
        //        cc.Dispose();
        //    }
        //}
        //private void insertData(string tableName, int Count)
        //{
        //    using (SqlCommand c = new SqlCommand("IF NOT EXISTS (SELECT * from updateCount WHERE table_name LIKE '" + tableName + "') " +
        //                                         "INSERT INTO updateCount(table_name, count) VALUES('" + tableName + "'," + Count + ")" +
        //                                         "else " +
        //                                         "UPDATE updateCount SET count=" + Count + " WHERE table_name='" + tableName + "'", newDBConnection.conn))
        //    {
        //        try
        //        {
        //            c.ExecuteNonQuery();
        //            //MessageBox.Show("SUCCESS");
        //        }
        //        catch (Exception ex)
        //        {
        //            writeUpdateMessage(ex.Message);
        //            //MessageBox.Show(ex.Message);
        //        }
        //    }
        //}

        //private int prevCount(string tableName)
        //{
        //    int res;
        //    using (SqlCommand cd = new SqlCommand("SELECT count from updateCount WHERE table_name='" + tableName + "'", newDBConnection.conn))
        //    {
        //        try
        //        {
        //            res = Int32.Parse(cd.ExecuteScalar().ToString());
        //            return res;
        //        }
        //        catch (Exception ex)
        //        {
        //            writeUpdateMessage(ex.Message);
        //            //MessageBox.Show(ex.Message+"HI");
        //            return 0;
        //        }
        //    }
        //}

        private void startAllButton_Click(object sender, EventArgs e)
        {
            dbToJson();
            stopAllButton.Enabled = true;
            startAllButton.Enabled = false;
            refreshFormTimer.Enabled = true;
        }

        private void stopAllButton_Click(object sender, EventArgs e)
        {
            startAllButton.Enabled = true;
            refreshFormTimer.Enabled = false;
            stopAllButton.Enabled = false;
        }

        private void dealerTableButton_Click(object sender, EventArgs e)
        {
            searchTable = "dealer";
            dbToJson();
            searchTable = string.Empty;
        }

        private void corporateTableButton_Click(object sender, EventArgs e)
        {
            searchTable = "Corporate";
            dbToJson();
            searchTable = string.Empty;
        }

        private void distributorTableButton_Click(object sender, EventArgs e)
        {
            searchTable = "Distributor";
            dbToJson();
            searchTable = string.Empty;
        }

        private void influencerTableButton_Click(object sender, EventArgs e)
        {
            searchTable = "influencer";
            dbToJson();
            searchTable = string.Empty;
        }

        private void retailerTableButton_Click(object sender, EventArgs e)
        {
            searchTable = "retailer";
            dbToJson();
            searchTable = string.Empty;
        }

        private void transactionTableButton_Click(object sender, EventArgs e)
        {
            searchTable = "transaction_table";
            dbToJson();
            searchTable = string.Empty;
        }
    }
}
