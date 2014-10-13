using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Net;
using System.Text;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace HttpRequestApp
{
    public partial class _Default : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {

            String strUrl = HttpContext.Current.Request.Url.AbsoluteUri;

            Uri myUri = new Uri(strUrl);

            string querystring = myUri.Query;
            string showString = querystring.Replace(@"?", string.Empty);
            Response.Write(showString);


            //Server.Transfer("~/About.aspx?uri=" + showString);
            //Response.Redirect("About.aspx");
            //Label1.Text = dd;
            //string path = HttpContext.Current.Request.Url.AbsoluteUri;
            //Uri myUri = new Uri(path);

            //// Get host part (host name or address and port). Returns "server:8080".
            //string hostpart = myUri.Authority;

            //// Get path and query string parts. Returns "/func2/SubFunc2?query=somevalue".
            //string pathpart = myUri.PathAndQuery;

            //// Get path components. Trailing separators. Returns { "/", "func2/", "sunFunc2" }.
            //string[] pathsegments = myUri.Segments;

            //// Get query string. Returns "?query=somevalue".
            //string querystring = myUri.Query;

            

            //String originalPath = new Uri(HttpContext.Current.Request.Url.AbsoluteUri).OriginalString;

            //String parentDirectory = originalPath.Substring(0, originalPath.LastIndexOf("/"));

            //Response.Write(pathpart);
        }
    }
}
