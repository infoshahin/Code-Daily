using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Data.SqlClient;
using System.Drawing;
using System.IO;
using System.Linq;
using System.Text;
using System.Windows.Forms;
using Newtonsoft.Json;
using Formatting = Newtonsoft.Json.Formatting;

namespace CrownCementJson
{
    public partial class Form1 : Form
    {
        Timer refreshFormTimer = new Timer();
        DBConnection newDBConnection = new DBConnection();
        public Form1()
        {
            InitializeComponent();
            refreshFormTimer.Interval = 1000 * 3; //60 seconds.
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

            showDbStatus.Text = newDBConnection.ConnectToDatabase();
            //Getting Lines as Array from textFileParsed Method
            string[] lineAsArray;
            textFileParsed(out lineAsArray);

            for (int i = 0; i < lineAsArray.Length; i++)
            {
                //Getting the Table names from Line String
                string[] arrData = lineAsArray[i].Split(',');
                string tbName = arrData[0];

                //Getting the Columns from Line String
                string colNames = String.Join(",", arrData, 1, arrData.Length - 1);

                string query = "SELECT " + colNames + " FROM " + tbName;
                //string query = "SELECT " + colNames[i] + " FROM " + tbNames[i];

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
                                    writeFailedMessage("Adapdater Can't Load any data in Table: " + tbName);
                                }
                                else
                                {
                                    adapt.Fill(table);
                                    int cur_count = table.Rows.Count;

                                    if (table.Rows.Count == 0)
                                    {
                                        writeFailedMessage("No data in Table: " + tbName);
                                        string jsonDir = CreateDirectory("JSON");
                                        File.WriteAllText(jsonDir + tbName + ".json", "");
                                    }
                                    else
                                    {
                                        //Getting the JSON Serialize data from Method DataTable to JSON declared below
                                        string result = DataTableToJSON(table, tbName);

                                        //Creating the JSON file as the Table Name in Directory Declared below in CreateDirectory
                                        string jsonDir = CreateDirectory("JSON");
                                        File.WriteAllText(jsonDir + tbName + ".json", result);
                                        writeSuccessMessage("Success to Write JSON: " + tbName);

                                        string update = updateCount(tbName, cur_count);
                                        //MessageBox.Show(update);
                                        writeSuccessMessage("Success: " + tbName + " & Updated:" + update + " Rows");
                                        string successMessage = "Success";
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
                                        showStatusListView.Items.Add(tbName).SubItems.Add(successMessage);
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
                
                showJsonData.Text = "OK";
                newDBConnection.Disconnect();
            }

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

        private DataTable ConvertList_To_Datatable(DataTable dtTable, ListView lvDetails)
        {
            if (lvDetails.Items.Count < 1)
            {
                return dtTable;
            }
            else
            {
                for (int ncount = 0; ncount <= lvDetails.Columns.Count - 1; ncount++)
                {
                    DataColumn dtColumn = new DataColumn(lvDetails.Columns[ncount].Text);
                    dtTable.Columns.Add(dtColumn);
                }
            }
            for (int nRowCount = 0; nRowCount <= lvDetails.Items.Count - 1; nRowCount++)
            {
                DataRow dtRow = dtTable.NewRow();
                for (int nItem = 0; nItem <= lvDetails.Items[nRowCount].SubItems.Count - 1; nItem++)
                {
                    dtRow[lvDetails.Columns[nItem].Text] = lvDetails.Items[nRowCount].SubItems[nItem].Text;

                } dtTable.Rows.Add(dtRow);

            } return dtTable;

        }


        public void textFileParsed(out string[] parsedLines)
        {
            string[] lines = parseTextFile();
            List<string> lineList = new List<string>();
            string lineString = "";

            for (int i = 0; i < lines.Length; i++)
            {
                lineString = lines[i].Replace("\t", ",");
                lineList.Add(lineString);
            }
            parsedLines = lineList.ToArray();
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
            string directory = System.IO.Path.GetDirectoryName(System.Windows.Forms.Application.ExecutablePath)+"\\"+folderName + "\\";
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
        public void writeUpdateMessage(string msg)
        {
            string sucLogDir = CreateDirectory("Log\\UpdateStatus\\");
            TextWriter logTextWriter = new StreamWriter(sucLogDir + "update_log.txt", true);
            logTextWriter.WriteLine(DateTime.Now + " ==> " + msg);
            logTextWriter.Close();
        }

        public string updateCount(string tableName, int Count)
        {
            int newCount;
            CreateUpdateTable();
            //MessageBox.Show(tableName);

            int res = prevCount(tableName);
            if (res != 0)
            {
                newCount = Count - res;
            }
            else
            {
                newCount = Count - res;
            }

            insertData(tableName, Count);

            return newCount.ToString();
        }
        private void CreateUpdateTable()
        {
            using (SqlCommand cc = new SqlCommand("IF NOT EXISTS ( SELECT 1 FROM sys.tables WHERE name LIKE '#updateCount%') CREATE TABLE updateCount(id INT NOT NULL IDENTITY, table_name NVARCHAR(50), count INT, PRIMARY KEY (id))", newDBConnection.conn))
            {
                try
                {
                    cc.ExecuteNonQuery();
                    //MessageBox.Show("Success");
                }
                catch (Exception ex)
                {
                    //MessageBox.Show(ex.Message);
                }
                cc.Dispose();
            }
        }
        private void insertData(string tableName, int Count)
        {
            using (SqlCommand c = new SqlCommand("IF NOT EXISTS (SELECT * from updateCount WHERE table_name LIKE '" + tableName + "') " +
                                                 "INSERT INTO updateCount(table_name, count) VALUES('" + tableName + "'," + Count + ")" +
                                                 "else " +
                                                 "UPDATE updateCount SET count=" + Count + " WHERE table_name='" + tableName + "'", newDBConnection.conn))
            {
                try
                {
                    c.ExecuteNonQuery();
                    //MessageBox.Show("SUCCESS");
                }
                catch (Exception ex)
                {
                    writeUpdateMessage(ex.Message);
                    //MessageBox.Show(ex.Message);
                }
            }
        }

        private int prevCount(string tableName)
        {
            int res;
            using (SqlCommand cd = new SqlCommand("SELECT count from updateCount WHERE table_name='" + tableName + "'", newDBConnection.conn))
            {
                try
                {
                    res = Int32.Parse(cd.ExecuteScalar().ToString());
                    return res;
                }
                catch (Exception ex)
                {
                    writeUpdateMessage(ex.Message);
                    //MessageBox.Show(ex.Message+"HI");
                    return 0;
                }
            }
        }

        private void startAllButton_Click(object sender, EventArgs e)
        {
            dbToJson();
        }
    }
}
