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
            Response.Write(Session["showString"].ToString());

            //string showString = Request.QueryString["showString"];
            //Response.Write(showString);

            //dim strUserID as string = Request.QueryString("UserID");
        }
    }
}
