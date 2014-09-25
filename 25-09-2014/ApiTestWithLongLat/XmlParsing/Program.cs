using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using XmlParsing.co.t2a;

namespace XmlParsing
{
    class Program
    {
        static void Main(string[] args)
        {
            string api_key = "test";

            co.t2a.T2A ws = new co.t2a.T2A();
            co.t2a.geo_code_res ws_res = ws.geo_code(api_key, null, "york");
            if (ws_res.status.CompareTo("ok") == 0)
            {
                //print geo code data
                int i = 0;
                while (i < ws_res.geo_data_list.Length)
                {
                    Console.WriteLine(ws_res.geo_data_list[i].description +
                        " at (" +
                        ws_res.geo_data_list[i].latitude + "," +
                        ws_res.geo_data_list[i].longitude + ")"
                        );

                    i++;
                }

            }
            Console.ReadKey();

        }
    }
}
