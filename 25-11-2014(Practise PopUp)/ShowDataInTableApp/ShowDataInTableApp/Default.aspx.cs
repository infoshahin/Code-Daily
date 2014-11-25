using System;
using System.Collections.Generic;
using System.Data;
using System.Data.SqlClient;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace ShowDataInTableApp
{
    public partial class _Default : Page
    {
        DbConnection newDbConnection = new DbConnection();
        protected void Page_Load(object sender, EventArgs e)
        {
            GetWhileLoopData();
        }

        public string GetWhileLoopData()
        {
            string htmlStr = "";
            newDbConnection.ConnectToDatabase();
            string query = "SELECT * from user_details";
            SqlCommand cmd = new SqlCommand(query, newDbConnection.conn);
            SqlDataReader reader = cmd.ExecuteReader();


            TableCell cellheaderId = new TableCell();
            cellheaderId.Text = "Id";
            TableCell cellheaderName = new TableCell();
            cellheaderName.Text = "Name";
            TableCell cellheaderLocation = new TableCell();
            cellheaderLocation.Text = "Location";
            TableRow row1 = new TableRow();
            row1.Cells.Add(cellheaderId);
            row1.Cells.Add(cellheaderName);
            row1.Cells.Add(cellheaderLocation);
            while (reader.Read())
            {
                TableCell cell1 = new TableCell();
                cell1.Text = reader[0].ToString();
                TableCell cell2 = new TableCell();
                cell2.Text = reader[1].ToString();
                TableCell cell3 = new TableCell();
                cell3.Text = reader[2].ToString();
                
                row1.Cells.Add(cell1);
                row1.Cells.Add(cell2);
                row1.Cells.Add(cell3);
            }
            Table1.Rows.Add(row1);
            

            newDbConnection.Disconnect();
            return htmlStr;

        }

        protected void Button1_Click(object sender, EventArgs e)
        {
            string script = "alert("+GetWhileLoopData()+");";
            ClientScript.RegisterClientScriptBlock(this.GetType(), "Alert", script, true);
            GetWhileLoopData();
        }
    }
}
