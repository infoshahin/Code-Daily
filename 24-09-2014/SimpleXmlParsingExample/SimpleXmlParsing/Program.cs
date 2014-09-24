using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Xml;

namespace SimpleXmlParsing
{
    class Program
    {
        static void Main(string[] args)
        {
           XmlReader xmlReader = XmlReader.Create(@"E:\KAZI\Works\24-09-2014\SimpleXmlParsing\SimpleXmlParsing\XmlData.xml");
            while (xmlReader.Read())
            {
                if (xmlReader.IsStartElement())
                {
                    switch (xmlReader.Name.ToString())
                    {
                        case "Name":
                            Console.WriteLine("Element: " + xmlReader.ReadString());
                            break;

                        case "Location":
                            Console.WriteLine("Location: " + xmlReader.ReadString());
                            break;
                    }
                }

                Console.WriteLine("");
            }
            Console.ReadKey();
        }
    }
}
