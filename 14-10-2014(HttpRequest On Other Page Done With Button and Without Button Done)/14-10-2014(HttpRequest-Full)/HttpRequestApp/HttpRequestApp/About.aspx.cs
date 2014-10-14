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
        protected void Page_Load(object sender, EventArgs e, string strUrl)
        {
            string showString = Session["showString"].ToString();
            Array show = showString.ToCharArray();
            //showString.Split(new char["="]);
            //string show= showString.Trim(new char[] = "=");
            Response.Write(show);
            //string showString = Session["showString"].ToString();
            //if (Session["showString"] != null)
            //    Label1.Text = showString;
            //else
            //    Response.Write("Error");
            //if (Request.Cookies["myname"] != null)
            //    Response.Write(Request.Cookies["myname"].Value);
        }
    }
}
