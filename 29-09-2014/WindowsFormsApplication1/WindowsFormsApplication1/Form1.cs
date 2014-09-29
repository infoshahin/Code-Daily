using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;
using WindowsFormsApplication1;
using System.IO;
using System.Xml;
using System.Xml.Linq;
using System.Data.SqlServerCe;

namespace WindowsFormsApplication1
{
    public partial class Form1 : Form
    {
        Timer _RefreshFormTimer = new Timer();
        public Form1()
        {
            InitializeComponent();
            _RefreshFormTimer.Interval = 1000 * 3; //3 seconds.
            _RefreshFormTimer.Tick += new EventHandler(RefreshFormTimer_Tick);
            _RefreshFormTimer.Enabled = false;
        }
        DBConnection dbCon = new DBConnection();
        string msisdn;
        string sms;
        private void submit_Click(object sender, EventArgs e)
        {

            string val1 = txtName.Text;
            string val2 = txtNumber.Text;
            string ins_msisdn = txtNumber.Text;
            string ins_sms = txtName.Text;


            
            string insCommand = "INSERT INTO tblSub (msisdn,sms) VALUES (@msisdn,@sms)";
            using (var cmd = new SqlCeCommand(insCommand, dbCon.conn))
            {
                cmd.Parameters.Add("@msisdn", SqlDbType.NVarChar);
                cmd.Parameters.Add("@sms", SqlDbType.NVarChar);
                cmd.Parameters["msisdn"].Value = ins_msisdn;
                cmd.Parameters["sms"].Value = ins_sms;
                cmd.ExecuteNonQuery();
                dbStatusLabel1.Text = "Data Added";
                txtName.Clear();
                txtNumber.Clear();
            }
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            dbStatusLabel1.Text = dbCon.ConnectToDatabase(); ;
            if (dbStatusLabel1.Text == "Connected") {
            }
            
            
        }

        private void Form1_FormClosing(object sender, FormClosingEventArgs e)
        {
            dbCon.Disconnect();
        }
        private void RefreshFormTimer_Tick(object sender, EventArgs e)
        {
            listView1.Clear();
            listView1.AutoArrange = true;

            listView1.Columns.Add("STATUS");
            listView1.Columns.Add("MSISDN");
            listView1.Columns.Add("SMS");
            listView1.Columns.Add("ERROR");
            for (var i = 0; i < listView1.Columns.Count; i++)
            {
                listView1.Columns[i].Width = 150;
                listView1.Columns[i].TextAlign = HorizontalAlignment.Center;
            }
            //Retrive Data from Database
            SqlCeCommand com = new SqlCeCommand("SELECT msisdn, sms FROM tblSub", dbCon.conn);
            SqlCeDataReader reader = com.ExecuteReader();
            while (reader.Read())
            {
                sms = reader.GetString(0); // sms string
                msisdn = reader.GetString(1);  // msisdn string
                //
                // Write the values read from the database to the screen.
                //
                //create the constructor with post type and few data
                MyWebRequest myRequest = new MyWebRequest("http://192.168.61.144/subscription/test/test.php", "POST", "msisdn=" + msisdn + "&sms=" + sms);
                //show the response string on the console screen.

                label1.Text = myRequest.GetResponse();
                XDocument doc = XDocument.Parse(label1.Text);

                var resDatas = doc.Descendants("REPLY").Select(datas => new
                {
                    Status = datas.Element("STATUS").Value,
                    Msisdn = datas.Element("MSISDN").Value,
                    SMS = datas.Element("SMS").Value,
                    Error = datas.Element("ERROR").Value
                }).ToList();
                foreach (var datas in resDatas)
                {
                    ListViewItem lvi = new ListViewItem(datas.Status);
                    lvi.SubItems.Add(datas.Msisdn);
                    lvi.SubItems.Add(datas.SMS);
                    lvi.SubItems.Add(datas.Error);
                    listView1.Items.Add(lvi);
                }
            }
        }

        private void button1_Click(object sender, EventArgs e)
        {
            _RefreshFormTimer.Enabled = true;
        }

        private void button2_Click(object sender, EventArgs e)
        {
            _RefreshFormTimer.Enabled = false;
            listView1.Clear();
            MessageBox.Show("Process Stopped");
        }
    }
}
