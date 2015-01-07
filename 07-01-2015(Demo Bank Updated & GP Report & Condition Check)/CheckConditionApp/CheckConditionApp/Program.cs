using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CheckConditionApp
{
    class Program
    {
        static void Main(string[] args)
        {
            string msisdn = "+888801726300352";
            int length = msisdn.Length;
            string status;

            if (((msisdn.Substring(0, 4) == "0119" || msisdn.Substring(0, 3) == "017" || msisdn.Substring(0, 3) == "019" || msisdn.Substring(0, 3) == "016" || msisdn.Substring(0, 3) == "015" || msisdn.Substring(0, 3) == "018") && msisdn.Length == 11)
                || ((msisdn.Substring(0, 6) == "880119" || msisdn.Substring(0, 5) == "88017" || msisdn.Substring(0, 5) == "88018" || msisdn.Substring(0, 5) == "88019" || msisdn.Substring(0, 5) == "88015" || msisdn.Substring(0, 5) == "88016") && msisdn.Length == 13)
                || ((msisdn.Substring(0, 7) == "+880119" || msisdn.Substring(0, 6) == "+88017" || msisdn.Substring(0, 6) == "+88018" || msisdn.Substring(0, 6) == "+88019" || msisdn.Substring(0, 6) == "+88015" || msisdn.Substring(0, 6) == "+88016") && msisdn.Length == 14)
                || ((msisdn.Substring(0, 9) == "+88880119" || msisdn.Substring(0, 8) == "+8888017" || msisdn.Substring(0, 8) == "+8888018" || msisdn.Substring(0, 8) == "+8888019" || msisdn.Substring(0, 8) == "+8888015" || msisdn.Substring(0, 8) == "+8888016") && msisdn.Length == 16)
                || ((msisdn.Substring(0, 8) == "88880119" || msisdn.Substring(0, 7) == "8888017" || msisdn.Substring(0, 7) == "8888018" || msisdn.Substring(0, 7) == "8888019" || msisdn.Substring(0, 7) == "8888015" || msisdn.Substring(0, 7) == "8888016") && msisdn.Length == 15)
                || ((msisdn.Substring(0, 5) == "00971" || msisdn.Substring(0, 6) == "009655" || msisdn.Substring(0, 6) == "009656" || msisdn.Substring(0, 6) == "009659" || msisdn.Substring(0, 5) == "00966" || msisdn.Substring(0, 4) == "0060" || msisdn.Substring(0, 5) == "00968" || msisdn.Substring(0, 4) == "0065" || msisdn.Substring(0, 5) == "00973" || msisdn.Substring(0, 5) == "00974" || msisdn.Substring(0, 4) == "0066" || msisdn.Substring(0, 5) == "0044") && msisdn.Length > 12)
                || ((msisdn.Substring(0, 4) == "+971" || msisdn.Substring(0, 5) == "+9655" || msisdn.Substring(0, 5) == "+9656" || msisdn.Substring(0, 5) == "+9659" || msisdn.Substring(0, 4) == "+966" || msisdn.Substring(0, 3) == "+60" || msisdn.Substring(0, 4) == "+968" || msisdn.Substring(0, 3) == "+65" || msisdn.Substring(0, 4) == "+973" || msisdn.Substring(0, 4) == "+974" || msisdn.Substring(0, 3) == "+66" || msisdn.Substring(0, 3) == "+44") && msisdn.Length > 12))
            {
                status = "SUCCESS";
                Console.WriteLine(status);
                Console.WriteLine(length);
                Console.ReadKey();
            }

            else
            {
                status = "FAILED";
                Console.WriteLine(status);
                Console.ReadKey();
            }

        }
    }
}
