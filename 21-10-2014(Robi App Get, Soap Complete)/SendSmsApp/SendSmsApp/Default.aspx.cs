using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Net;
using System.Security.Cryptography;
using System.Web;
using System.Web.Services.Description;
using System.Web.UI;
using System.Web.UI.WebControls;
using SendSmsApp.bd.com.robi.bmpws;

namespace SendSmsApp
{
    public partial class _Default : System.Web.UI.Page
    {
        public const string username = "TestSMSRobi";
        public const string password = "TestSMSRobi";
        protected void Page_Load(object sender, EventArgs e)
        {

        }

        protected void sendMessageButtonGet_Click(object sender, EventArgs e)
        {
            string getUrl = "https://bmpws.robi.com.bd/ApacheGearWS/SendTextMessage";

            string getFrom = fromTextBoxGet.Text;
            string getTo = toTextBoxGet.Text;
            string getMessage = textMsgTextBoxGet.Text;
            string getParameters = "Username=" + username + "&" + "Password=" + password + "&" + "From=" + getFrom + "&" + "To=" + getTo + "&" + "Message=" + getMessage;
            string getResult = SmsThroughHttpGet(getUrl, getParameters);
            getLabel.Text = getResult;
        }

        private string SmsThroughHttpGet(string getUrl, string getParameters)
        {
            try
            {
                HttpWebRequest request = (HttpWebRequest)WebRequest.Create(getUrl + "?" + getParameters);
                HttpWebResponse response = (HttpWebResponse)request.GetResponse();
                Stream stream = response.GetResponseStream();
                StreamReader reader = new StreamReader(stream);

                string data = reader.ReadToEnd().Replace("?", " ");

                reader.Close();
                stream.Close();

                return data;
            }
            catch (Exception ex)
            {
                throw ex;
            }
        }

        protected void sendMessageButtonSoap_Click(object sender, EventArgs e)
        {
            string from = fromTextBoxSoap.Text;
            string to = toTextBoxSoap.Text;
            string message = textMsgTextBoxSoap.Text;
            string sendTextMessageToOneRecipientId = SmsThroughSoap(username, password, from, to, message);
            soapLabel.Text = sendTextMessageToOneRecipientId;
        }

        private string SmsThroughSoap(string username, string password, string from, string to, string message)
        {
            bd.com.robi.bmpws.CMPWebService webService = new CMPWebService();
            var sendTextMessageToOneRecipient = webService.SendTextMessage(username, password, from, to, message);
            return sendTextMessageToOneRecipient.MessageId.ToString();
        }
    }
}
