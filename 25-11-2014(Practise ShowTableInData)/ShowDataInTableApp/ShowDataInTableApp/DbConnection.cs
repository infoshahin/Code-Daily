using System;
using System.Collections.Generic;
using System.Data.SqlClient;
using System.Linq;
using System.Web;

namespace ShowDataInTableApp
{
    public class DbConnection
    {
        public SqlConnection conn;

        public DbConnection()
        {
            //constructor
        }

        ~DbConnection()
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
                conn = new SqlConnection();
                conn.ConnectionString = @"Data Source=(LocalDB)\v11.0;AttachDbFilename=C:\Users\Support Desk 6\Documents\User.mdf;Integrated Security=True;Connect Timeout=30";
                conn.Open();
                return "Connected";
            }

            catch (SqlException e)
            {
                conn = null;
                return e.Message;
            }
        }
    }
}