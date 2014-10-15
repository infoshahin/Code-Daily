using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace HttpRequestApp
{
    public partial class About : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {
            if (Session["showString"] != null)
                Label1.Text = Session["showString"].ToString();
            if (Session["showString"] != null)
            {
                string parsedString = Session["showString"].ToString();
                //List<string> mystringList = new List<string>();
                //List<string> resultList = new List<string>();
                
                //mystringList = parsedString.Split('');
                string[] singleStrings = new string[10];
                string[] result = new string[singleStrings.Length];
                singleStrings = parsedString.Split(' ');
                int i = 0;
                foreach (string word in singleStrings)
                {
                    result[i] = word;
                    i++;
                    
                }
                Response.Write(result[i]);
                for (int j = 0; j < result.Length; j = j + 2)
                {
                    Response.Write(result[j] + " " + result[j + 1]);
                    Response.Write("<br>");
                }
            }


            //string[] mYarray= new string[singleStrings.Length];
            //for (int i = 0; i < singleStrings.Length; i++)
            //{
            //    mYarray[i] = singleStrings[i];
            //}
            //else
            //string showString = Session["showString"].ToString();
            //if (Session["showString"] != null)
            //    Label1.Text = showString;
            //else
            ////    Response.Write("Error");
            //if (Request.Cookies["myname"] != null)
            //    Response.Write(Request.Cookies["myname"].Value);
        }

        protected void Button1_Click(object sender, EventArgs e)
        {
            //string showString = Session["showString"].ToString();
            //if (Session["showString"] != null)
            //    Label1.Text = showString;
        }
    }
}
