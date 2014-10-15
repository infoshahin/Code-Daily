using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Services;

namespace MyWebService
{
    /// <summary>
    /// Summary description for Service1
    /// </summary>
    [WebService(Namespace = "http://tempuri.org/")]
    [WebServiceBinding(ConformsTo = WsiProfiles.None)]
    [System.ComponentModel.ToolboxItem(false)]
    // To allow this Web Service to be called from script, using ASP.NET AJAX, uncomment the following line. 
    // [System.Web.Script.Services.ScriptService]
    public class Service1 : System.Web.Services.WebService
    {

        [WebMethod(MessageName = "Name")]
        public MyObject HelloWorld( String name)
        {
            MyObject mo = new MyObject();
            mo.Name = name;
            mo.Age = 16;
            return mo;
        }

        [WebMethod(MessageName = "Name & Age")]
        public MyObject HelloWorld(String name, int age)
        {
            MyObject mo = new MyObject();
            mo.Name = name;
            mo.Age = age;
            return mo;
        }
    }
}