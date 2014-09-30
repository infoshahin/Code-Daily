using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Data;
using System.Data.Sql;
using System.Data.SqlClient;
using System.Windows.Forms;

namespace WindowsFormsApplication1
{
    class DBConnection
    {
       

        public System.Data.SqlClient.SqlConnection conn;

        public DBConnection()

        {

            //constructor

        }

        ~DBConnection()

        {

            //destructor

            conn = null;

        }

        public void Disconnect()

        {

            conn.Close();

        }

        public string ConnectToDatabase()

        {

            try

            {
                conn = new System.Data.SqlClient.SqlConnection();
                conn.ConnectionString = @"Data Source=.\SQLEXPRESS;AttachDbFilename=E:\KAZI\Works\29-09-2014\2013 VS\WindowsFormsApplication1\WindowsFormsApplication1\Database1.mdf;Integrated Security=True;Connect Timeout=30;User Instance=True";
                conn.Open();
                return "Connected";

            }

            catch(SqlException e)

            {

                conn = null;

                return e.Message;

            }

        }
        public DataTable getAllDrugs()
        {

            try
            {

                string strCommand = "SELECT * FROM tblSub";

                DataTable dt = new DataTable();

                SqlDataAdapter da = new SqlDataAdapter(strCommand, conn);

                da.Fill(dt);

                return dt;

            }

            catch (SqlException e)
            {

                MessageBox.Show(e.Source + "\n" + e.Message + "\n" + e.StackTrace);

                return null;

            }

        }
    }
}

