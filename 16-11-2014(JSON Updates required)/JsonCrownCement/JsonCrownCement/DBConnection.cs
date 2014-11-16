using System;
using System.Collections.Generic;
using System.Data.SqlClient;
using System.Linq;
using System.Text;

namespace JsonCrownCement
{
    public class DBConnection
    {
        public SqlConnection conn;

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
                conn = new SqlConnection();
                conn.ConnectionString = @"Data Source=.\SQLEXPRESS;AttachDbFilename=C:\Users\Support Desk 6\Documents\JsonDB.mdf;Integrated Security=True;Connect Timeout=30;User Instance=True";
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
