using System;
using System.Collections.Generic;
using System.Collections.Specialized;
using System.ComponentModel;
using System.Data;
using System.Data.SqlClient;
using System.Data.SqlServerCe;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Text.RegularExpressions;
using System.Windows.Forms;

namespace AutomaticBalanceUpdateApp
{
    public partial class AutomaticBalanceUpdate : Form
    {
        Timer RefreshFormTimer = new Timer();
        SqlCeConnection mycon = new SqlCeConnection(@"Data Source=|DataDirectory|\Database1.sdf;");
            
        public AutomaticBalanceUpdate()
        {
            InitializeComponent();
            RefreshFormTimer.Interval = 1000*30; // 60 seconds
            RefreshFormTimer.Tick += new EventHandler(RefreshFormTimer_Tick);
            RefreshFormTimer.Enabled = true;
        }


        private void UpdateBalance()
        {
            showDataLabel.Text = "";
            //showDbConnectionLabel.Text = con.ConnectToDatabase();
            List<string> user = new List<string>();
            List<string> pass = new List<string>();
            List<string> listId = new List<string>();
            string queryToSelect = "SELECT * FROM account_credentials";
            SqlCeCommand command = new SqlCeCommand(queryToSelect, mycon);
            SqlCeDataReader reader = command.ExecuteReader();
            while (reader.Read())
            {
                if (reader.HasRows)
                {
                    user.Add(reader["username"].ToString());
                    pass.Add(reader["password"].ToString());
                    listId.Add(reader["acc_id"].ToString());
                }
            }

            string[] username = user.ToArray();
            string[] password = pass.ToArray();
            string[] id = listId.ToArray();

            for (int i = 0; i < username.Length; i++)
            {
                using (var client = new CookieAwareWebClient())
                {
                    var values = new NameValueCollection
                    {
                        {"username", username[i]},
                        {"password", password[i]}
                    };

                    client.UploadValues("http://123.49.3.58:8081", values);
                    // If the previous call succeeded we now have a valid authentication cookie
                    // so we could download the protected page

                    string result = client.DownloadString("http://123.49.3.58:8081/corp_crd.php");
                    string amounts =
                        result.Substring(result.IndexOf("<center>"),
                            result.IndexOf("</center>") - result.IndexOf("<center>")).Replace("<center>", "").Trim();
                    string[] number = Regex.Split(amounts, @"\D+");

                    List<int> numbersfrompage = new List<int>();
                    foreach (string value in number)
                    {
                        if (!string.IsNullOrEmpty(value))
                        {
                            int numbers = int.Parse(value);
                            numbersfrompage.Add(numbers);
                        }
                    }
                    int[] arrayOfNumbers = numbersfrompage.ToArray();
                    int amount = arrayOfNumbers[1];
                    DateTime date = DateTime.Now;

                    showDataLabel.Text += username[i] + ":" + date + ":" + amount + "</br>";
                    Insert(username[i], date.ToString(), amount, id[i]);
                }
            }
        }

        private string Insert(string user, string date, int amount, string id)
        {
            try
            {
                using (mycon)
                {
                    if (mycon.State == ConnectionState.Open)
                    {
                        string queryToUpdate = "UPDATE store SET date = '" + date + "', amount= " + amount +
                                               " WHERE username = '" + user +
                                               "'; IF @@ROWCOUNT = 0 INSERT INTO store (username, date, amount) VALUES ('" +
                                               user + "', '" + date + "'," + amount + ") ";
                        mycon.Open();
                        using (SqlCeCommand command = new SqlCeCommand(queryToUpdate, mycon))
                        {
                            try
                            {
                                command.ExecuteNonQuery();
                                return "Success";
                            }
                            catch (Exception exception)
                            {
                                return exception.ToString();
                            }
                        }
                    }
                    else
                    {
                        return "Not connected";
                    }
                }
            }
            catch (Exception ex)
            {
                ex.ToString();
            }
            return null;
        }

        private void RefreshFormTimer_Tick(object sender, EventArgs e)
        {
            UpdateBalance();
        }

        private void AutomaticBalanceUpdate_Load_1(object sender, EventArgs e)
        {
            mycon.Open();
            try
            {
                using (mycon)
                {
                    if (mycon.State == ConnectionState.Open)
                    {
                        showDbConnectionLabel.Text = "Connected";
                    }
                    else
                    {
                        showDbConnectionLabel.Text = "Connection Failed";
                    }
                }
            }
            catch (Exception ex)
            {
                showDbConnectionLabel.Text = ex.ToString();
            }
            UpdateBalance();
        }
    }
}
