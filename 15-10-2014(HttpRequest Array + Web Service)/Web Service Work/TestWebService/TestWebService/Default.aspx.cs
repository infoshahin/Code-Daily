using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using TestWebService.localhost;

namespace TestWebService
{
    public partial class _Default : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {

        }

        protected void Button1_Click(object sender, EventArgs e)
        {
            Service1 s1 = new Service1();
            MyObject mo = s1.HelloWorld("Kazi");
            Response.Write(mo.Name + "\n" +mo.Age);
        }

        protected void Button2_Click(object sender, EventArgs e)
        {
            Service1 s2 = new Service1();
            MyObject mo = s2.HelloWorld("Irfan", 25);
            Response.Write(mo.Name + " " + mo.Age);
        }
    }
}
