using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Data;
using System.Data.SqlServerCe;
using System.Windows.Forms;

namespace WindowsFormsApplication1
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

                conn = new SqlCeConnection(@"Data Source=c:\users\support desk 7\documents\visual studio 2010\Projects\WindowsFormsApplication1\WindowsFormsApplication1\Database1.sdf");

               

                conn.Open();

                return "Connected";

            }

            catch(SqlCeException e)

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

                SqlCeDataAdapter da = new SqlCeDataAdapter(strCommand, conn);

                da.Fill(dt);

                return dt;

            }

            catch (SqlCeException e)
            {

                MessageBox.Show(e.Source + "\n" + e.Message + "\n" + e.StackTrace);

                return null;

            }

        }
    }
}

