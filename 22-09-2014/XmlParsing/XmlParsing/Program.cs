using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Xml;

namespace XmlParsing
{
    class Program
    {
        static void Main(string[] args)
        {
            XmlDocument xmlDocument = new XmlDocument();
            //XmlDocument xmlDocument = new XmlDocument();
            xmlDocument.Load(@"E:\KAZI\Office Docs\String Parsing.xml");

            XmlNodeList nodesList = xmlDocument.DocumentElement.SelectNodes("/item");

            List<Item> items = new List<Item>();

            foreach (XmlNode node in nodesList)
            {
                Item item = new Item();
                item.key = node.SelectSingleNode("key").InnerText;
                item.value = node.SelectSingleNode("value").InnerText;

                items.Add(item);
            }

            Console.WriteLine(items);
            Console.ReadKey();
        }
    }
}
