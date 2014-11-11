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
using Formatting = Newtonsoft.Json.Formatting;

namespace JsonCrownCement
{
    public partial class Form1 : Form
    {
        Timer refreshFormTimer = new Timer();
        DBConnection newDBConnection = new DBConnection();
        public Form1()
        {
            InitializeComponent();
            refreshFormTimer.Interval = 1000 * 10; //60 seconds.
            refreshFormTimer.Tick += new EventHandler(refreshFormTimer_Tick);
            refreshFormTimer.Enabled = true;
        }

        private void refreshFormTimer_Tick(object sender, EventArgs e)
        {
            WriteDataToJsonFile();
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            WriteDataToJsonFile();
        }

        private void WriteDataToJsonFile()
        {
            Object result = ConvertDataTabletoStringFromDealerTable();
            string json = JsonConvert.SerializeObject(result, Formatting.Indented);
            File.WriteAllText(@"json.json", json);
        }

        public Object ConvertDataTabletoStringFromDealerTable()
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

                        sb.Append(tempString + "}," + Environment.NewLine);
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
                sb.Append("]");
                showJsonData.Text = sb.ToString();
                Object result = Convert.ChangeType(sb.ToString(), TypeCode.Object);
                return result;
            }
            catch (Exception exception)
            {
                showJsonData.Text = exception.Message;
                return showJsonData.Text;
            }
        }
    }
}
