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

namespace JsonCrownCement
{
    public partial class Form1 : Form
    {
        string message = "Default";
        public int updatedRowCount = 0;
        public int affectedCount = 0;
        public int jsonDataCount = 0;
        public string failedMessage;
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
            AllMethodsToCreateJsonData();
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            stopAllButton.Enabled = false;
        }

        private void WriteDataToJsonFileForTable(string fileName, string tableName)
        {
            Object getObjectFromTable = ConvertDataTabletoStringFromTable(tableName);
            string result = getObjectFromTable.ToString();
            string jsonDir = CreateDirectory("JSON");
            File.WriteAllText(jsonDir+fileName+".json", result);

            string log =  DateTime.Now + " ==> " + "Change Table " + tableName ;
            log += "  Data Updated:"+affectedCount;
            if (affectedCount != 0)
            {
                log += "  Data Inserted: " + jsonDataCount;
            }
            string sucLogDir = CreateDirectory("LOG\\SUCESS\\");
            TextWriter logTextWriter = new StreamWriter(sucLogDir+"success_log.txt", true);
            logTextWriter.WriteLine(log);
            logTextWriter.Close();
        }



        public Object ConvertDataTabletoStringFromTable(string tableName)
        {


            //ListViewItem showDataListViewItem;
                DataTable dt = new DataTable();

                showDbStatus.Text = newDBConnection.ConnectToDatabase();
                string queryToSelect = "SELECT * FROM "+ tableName;
                SqlCommand cmd = new SqlCommand(queryToSelect, newDBConnection.conn);

                try
                {
                    SqlDataAdapter da = new SqlDataAdapter(cmd);
                    da.Fill(dt);
                    string[] jsonArray = new string[dt.Columns.Count];
                    string headString = string.Empty;
                    if (dt.Rows.Count>0)
                    {
                        jsonDataCount = dt.Rows.Count;
                        for (int i = 0; i < dt.Columns.Count; i++)
                        {
                            jsonArray[i] = dt.Columns[i].Caption; // Array for all columns
                            headString += "\"" + jsonArray[i] + "\" : \"" + jsonArray[i] + i.ToString() + "%" + "\",";
                        }

                        headString = headString.Substring(0, headString.Length - 1);

                        StringBuilder sb = new StringBuilder();
                        sb.Append("{");
                        sb.Append("\"" + tableName + "\"");
                        sb.Append(" : ");
                        sb.Append(" [");

                        if (dt.Rows.Count > 0)
                        {
                            int rowsNumber = dt.Rows.Count;
                            if (updatedRowCount == 0)
                            {
                                updatedRowCount = rowsNumber;

                            }
                            else
                            {
                                affectedCount = rowsNumber - updatedRowCount;
                            }
                            for (int i = 0; i < dt.Rows.Count; i++)
                            {
                                string tempString = headString;
                                sb.Append("{");

                                // To get each value from the datatable
                                for (int j = 0; j < dt.Columns.Count; j++)
                                {
                                    tempString = tempString.Replace(dt.Columns[j] + j.ToString() + "%", dt.Rows[i][j].ToString());
                                }

                                sb.Append(tempString + "},");
                            }
                        }
                        else
                        {
                            string tempString = headString;
                            sb.Append("{");
                            for (int j = 0; j < dt.Columns.Count; j++)
                            {
                                tempString = tempString.Replace(dt.Columns[j] + j.ToString() + "%", "-");
                            }

                            sb.Append(tempString + "},");
                        }

                        sb = new StringBuilder(sb.ToString().Substring(0, sb.ToString().Length - 1));
                        sb.Append("]" + "}");
                        showJsonData.Text = message;
                        cmd.Dispose();
                        da.Dispose();
                        message = "Success";
                        if (showStatusListView.Columns.Count == 0 || showStatusListView.Columns.Count < 2)
                        {
                            showStatusListView.AutoArrange = true;
                            showStatusListView.Columns.Add("tablename");
                            showStatusListView.Columns.Add("status");
                            for (var i = 0; i < showStatusListView.Columns.Count; i++)
                            {
                                showStatusListView.Columns[i].Width = 150;
                                showStatusListView.Columns[i].TextAlign = HorizontalAlignment.Center;
                            }
                        }
                        showStatusListView.Items.Add(tableName).SubItems.Add(message);
                        //string[] listData = {tableName, message};
                        //showDataListViewItem = new ListViewItem(listData);
                        //showStatusListView.Invoke(
                        //    new MethodInvoker(delegate() { showStatusListView.Items.Add(showDataListViewItem); }));
                        //showDataListViewItem.SubItems.Add(tableName)};
                        //showDataListViewItem.SubItems.Add(message);
                        //showStatusListView.Items.Add(showDataListViewItem);
                        Object result = Convert.ChangeType(sb.ToString(), TypeCode.Object);
                        return result;
                    }
                    else
                    {
                        message = "Failed";
                        failedMessage = "There was no data in Table";
                        if (showStatusListView.Columns.Count == 0 || showStatusListView.Columns.Count < 2)
                        {
                            showStatusListView.AutoArrange = true;
                            showStatusListView.Columns.Add("tablename");
                            showStatusListView.Columns.Add("status");
                            for (var i = 0; i < showStatusListView.Columns.Count; i++)
                            {
                                showStatusListView.Columns[i].Width = 150;
                                showStatusListView.Columns[i].TextAlign = HorizontalAlignment.Center;
                            }
                        }
                        showStatusListView.Items.Add(tableName).SubItems.Add(message);
                        //string[] listData = { tableName, message };
                        //showDataListViewItem = new ListViewItem(listData);
                        //showStatusListView.Invoke(
                         //   new MethodInvoker(delegate() { showStatusListView.Items.Add(showDataListViewItem); }));
                    }



                    string errLogDir = CreateDirectory("LOG\\ERROR\\");
                    string err_timestamp;
                    TextWriter errLogTextWriter = new StreamWriter(errLogDir + "error_log.txt", true);
                    err_timestamp = DateTime.Now + " ==> " + "Error Table " + tableName + "  Message: " + failedMessage;
                    errLogTextWriter.WriteLine(err_timestamp);
                    errLogTextWriter.Close();


                    return showJsonData.Text = message;
                }
                catch (Exception exception)
                {
                    showJsonData.Text = exception.Message;

                    failedMessage = exception.Message.ToString();


                    string errLogDir = CreateDirectory("LOG\\ERROR\\");
                    string err_timestamp;
                    TextWriter errLogTextWriter = new StreamWriter(errLogDir + "error_log.txt", true);
                    err_timestamp = DateTime.Now + " ==> " + "Error Table " + tableName + "  Message: " + failedMessage;
                    errLogTextWriter.WriteLine(err_timestamp);
                    errLogTextWriter.Close();

                    return showJsonData.Text;
                }
        }

        private void startAllButton_Click(object sender, EventArgs e)
        {
            AllMethodsToCreateJsonData();
            stopAllButton.Enabled = true;
            startAllButton.Enabled = false;
            refreshFormTimer.Enabled = true;
        }

        public void AllMethodsToCreateJsonData()
        {
            WriteDataToJsonFileForTable("Dealer", "dealer");
            WriteDataToJsonFileForTable("Corporate", "Corporate");
            WriteDataToJsonFileForTable("Distributor", "Distributor");
            WriteDataToJsonFileForTable("Influencer", "influencer");
            WriteDataToJsonFileForTable("Retailer", "retailer");
            WriteDataToJsonFileForTable("Transaction", "transfaction_table");
        }

        private void stopAllButton_Click(object sender, EventArgs e)
        {
            startAllButton.Enabled = true;
            refreshFormTimer.Enabled = false;
            stopAllButton.Enabled = false;
        }

        private void dealerTableButton_Click(object sender, EventArgs e)
        {
            WriteDataToJsonFileForTable("Dealer", "dealer");
            refreshFormTimer.Enabled = false;
        }

        private void corporateTableButton_Click(object sender, EventArgs e)
        {
            WriteDataToJsonFileForTable("Corporate", "Corporate");
            refreshFormTimer.Enabled = false;
        }

        private void distributorTableButton_Click(object sender, EventArgs e)
        {
            WriteDataToJsonFileForTable("Distributor", "Distributor");
            refreshFormTimer.Enabled = false;
        }

        private void influencerTableButton_Click(object sender, EventArgs e)
        {
            WriteDataToJsonFileForTable("Influencer", "influencer");
            refreshFormTimer.Enabled = false;
        }

        private void retailerTableButton_Click(object sender, EventArgs e)
        {
            WriteDataToJsonFileForTable("Retailer", "retailer");
            refreshFormTimer.Enabled = false;
        }

        private void transactionTableButton_Click(object sender, EventArgs e)
        {
            WriteDataToJsonFileForTable("Transaction", "transaction_table");
            refreshFormTimer.Enabled = false;
        }

        public string CreateDirectory(string folderName)
        {
            string directory = @"E:\KAZI\Works\13-11-2014(JSON)\\" + folderName + "\\";
            if (!Directory.Exists(directory))
            {
                Directory.CreateDirectory(directory);
            }
            return directory;
        }
    }
}
