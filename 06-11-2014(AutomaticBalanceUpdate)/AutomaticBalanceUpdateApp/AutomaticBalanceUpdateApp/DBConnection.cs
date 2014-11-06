using System;
using System.Collections.Generic;
using System.Data.SqlClient;
using System.Data.SqlServerCe;
using System.Linq;
using System.Text;

namespace AutomaticBalanceUpdateApp
{
    class DBConnection
    {
        public SqlCeConnection conn;

        public DBConnection()
        {
            //constructor
        }

        ~DBConnection()
        {
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
                conn = new SqlCeConnection();
                conn.ConnectionString = @"Data Source=e:\KAZI\Works\06-11-2014(Automatic Balance Update)\AutomaticBalanceUpdateApp\AutomaticBalanceUpdateApp\Database1.sdf;Persist Security Info=True;";
                conn.Open();
                return "Connected";
            }
            catch (SqlCeException e)
            {

                conn = null;
                return e.Message;
            }
        }
    }
}
