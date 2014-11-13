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
            MessageBox.Show(showStatusListView.View.ToString());
            showStatusListView.Clear();
            WriteDataToJsonFileForTable("Dealer", "dealer");
            WriteDataToJsonFileForTable("Corporate", "Corporate");
            WriteDataToJsonFileForTable("Distributor", "Distributor");
            WriteDataToJsonFileForTable("Influencer", "influencer");
            WriteDataToJsonFileForTable("Retailer", "retailer");
            WriteDataToJsonFileForTable("Transaction", "transaction_table");
        }

        private void Form1_Load(object sender, EventArgs e)
        {

        }

        private void WriteDataToJsonFileForTable(string fileName, string tableName)
        {
            Object getObjectFromDealerTable = ConvertDataTabletoStringFromDealerTable(tableName);
            string result = getObjectFromDealerTable.ToString();
            File.WriteAllText(fileName+".json", result);
            string log =  DateTime.Now + " ==> " + "Change Table " + tableName ;
            TextWriter logTextWriter = new StreamWriter("Log.txt", true);
            logTextWriter.WriteLine(log);
            logTextWriter.Close();
        }



        public Object ConvertDataTabletoStringFromDealerTable(string tableName)
        {
            //ListViewItem showDataListViewItem;
            try
            {
                DataTable dt = new DataTable();

                showDbStatus.Text = newDBConnection.ConnectToDatabase();
                string queryToSelect = "SELECT * FROM "+ tableName;
                SqlCommand cmd = new SqlCommand(queryToSelect, newDBConnection.conn);
                SqlDataAdapter da = new SqlDataAdapter(cmd);
                da.Fill(dt);
                string[] jsonArray = new string[dt.Columns.Count];
                string headString = string.Empty;
                if (dt.Columns.Count>0)
                {
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
                    showJsonData.Text = sb.ToString();
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
                    string[] listData = { tableName, message };
                    //showDataListViewItem = new ListViewItem(listData);
                    //showStatusListView.Invoke(
                     //   new MethodInvoker(delegate() { showStatusListView.Items.Add(showDataListViewItem); }));
                }
                return showJsonData.Text = message;
            }
            catch (Exception exception)
            {
                showJsonData.Text = exception.Message;
                return showJsonData.Text;
            }
        }

        private void startAllButton_Click(object sender, EventArgs e)
        {
            WriteDataToJsonFileForTable("Dealer", "dealer");
            WriteDataToJsonFileForTable("Corporate", "Corporate");
            WriteDataToJsonFileForTable("Distributor", "Distributor");
            WriteDataToJsonFileForTable("Influencer", "influencer");
            WriteDataToJsonFileForTable("Retailer", "retailer");
            WriteDataToJsonFileForTable("Transaction", "transaction_table");
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
    }
}
