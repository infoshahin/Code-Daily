﻿using System;
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
using Formatting = System.Xml.Formatting;

namespace JsonCrownCement
{
    public partial class Form1 : Form
    {
        Timer refreshFormTimer = new Timer();
        DBConnection newDBConnection = new DBConnection();
        public Form1()
        {
            InitializeComponent();
            refreshFormTimer.Interval = 1000 * 60; //60 seconds.
            refreshFormTimer.Tick += new EventHandler(refreshFormTimer_Tick);
            refreshFormTimer.Enabled = true;
        }

        private void refreshFormTimer_Tick(object sender, EventArgs e)
        {
            ConvertDataTabletoStringFromDealerTable();
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            ConvertDataTabletoStringFromDealerTable();
        }

        public string ConvertDataTabletoStringFromDealerTable()
        {
            try
            {
                DataTable dt = new DataTable();

                showDbStatus.Text = newDBConnection.ConnectToDatabase();
                string queryToSelect = "SELECT * FROM dealer";
                SqlCommand cmd = new SqlCommand(queryToSelect, newDBConnection.conn);
                SqlDataAdapter da = new SqlDataAdapter(cmd);
                da.Fill(dt);
                string[] jsonArray = new string[dt.Columns.Count];
                string headString = string.Empty;

                for (int i = 0; i < dt.Columns.Count; i++)
                {
                    jsonArray[i] = dt.Columns[i].Caption; // Array for all columns
                    headString += "'" + jsonArray[i] + "' : '" + jsonArray[i] + i.ToString() + "%" + "',";
                }

                headString = headString.Substring(0, headString.Length - 1);

                StringBuilder sb = new StringBuilder();
                sb.Append("[");

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

                    sb.Append(tempString + "}," + "\n");
                }

                sb = new StringBuilder(sb.ToString().Substring(0, sb.ToString().Length - 1));
                sb.Append("]");
                //UserData result = sb.ToString();
                showJsonData.Text = sb.ToString();
                //string json = JsonConvert.ToString(sb);
                //File.WriteAllText(@"dealer.json", json);
                //string json = JsonConvert.SerializeObject(result, Formatting.Indented);
                //File.WriteAllText(@"c:\user.json", json);
                //string json = JsonConvert.SerializeObject(_data.ToArray());

                ////write string to file
                //System.IO.File.WriteAllText(@"D:\path.txt", json);
                //StreamWriter outfile = new StreamWriter(@"JsonForDealer.txt");
                //outfile.Write(sb);
                return showJsonData.Text;
            }
            catch (Exception exception)
            {
                showJsonData.Text = exception.Message;
                return showJsonData.Text;
            }
        }
    }
}
