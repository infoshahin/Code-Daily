using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Net;
using System.IO;
using System.Text;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Security.Cryptography.X509Certificates;

namespace robi
{
    public partial class _Default : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {
            System.Net.ServicePointManager.ServerCertificateValidationCallback =
            delegate(object me, System.Security.Cryptography.X509Certificates.X509Certificate certificate,
                        System.Security.Cryptography.X509Certificates.X509Chain chain,
                        System.Net.Security.SslPolicyErrors sslPolicyErrors)
            {
            return true; // **** Always accept
            };
        }


        protected void Button1_Click(object sender, EventArgs e)
        {
            //Web Service Data Transferring
            localhost.server data = new localhost.server();
            string userName = username.Text;
            string passWord = password.Text;
            TextBox[] array = { username, password };

            var result = data.login(userName, passWord);
            Label1.Text = "Full Name: " + result.fullname;

            //create the constructor with post type and few data
            MyWebRequest myRequest = new MyWebRequest("http://nfl.streamtv2pc.com/index.php", "POST", "ip=www.facebook.com");
            //show the response string on the console screen.
            Label2.Text = myRequest.GetResponse();



            ////GET METHOD DATA TRANSFERRING
            //WebRequest request = WebRequest.Create("http://nfl.streamtv2pc.com/index.php");
            //request.Method = "POST";
            //// Create POST data and convert it to a byte array.
            //string ip = "www.facebook.com";
            //byte[] byteArray = Encoding.UTF8.GetBytes(ip);
            //// Set the ContentType property of the WebRequest.
            //request.ContentType = "application/x-www-form-urlencoded";
            //// Set the ContentLength property of the WebRequest.
            //request.ContentLength = byteArray.Length;
            //// Get the request stream.
            //Stream dataStream = request.GetRequestStream();
            //// Write the data to the request stream.
            //dataStream.Write(byteArray, 0, byteArray.Length);
            //// Close the Stream object.
            //dataStream.Close();
            //// Get the response.
            //WebResponse response = request.GetResponse();
            //// Display the status.
            ////Label2.Text = ((HttpWebResponse)response).StatusDescription;
            //// Get the stream containing content returned by the server.
            //dataStream = response.GetResponseStream();
            //// Open the stream using a StreamReader for easy access.
            //StreamReader reader = new StreamReader(dataStream);
            //// Read the content.
            //string responseFromServer = reader.ReadToEnd();
            //// Display the content.
            //Label2.Text = responseFromServer;
            //// Clean up the streams.
            //reader.Close();
            //dataStream.Close();
            //response.Close();
        }
    }
}
