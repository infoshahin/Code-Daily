if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else //if
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
//else(window.DOMParser)
  //{
  //xmlhttp=new DOMParser();
  //}
xmlhttp.open("GET","my.xml",false);
xmlhttp.send();
xmlDoc=xmlhttp.responseXML; 

var a = xmlDoc.getElementsByTagName("ns1:spID")[0].firstChild.nodeValue;

document.write("<table border='1'>");
document.write("<tr><th>User ID</th><th>Type</th><th>sp ID</th><th>Product ID</th><th>Service ID</th><th>Service List</th><th>Update Type</th><th>Update Time</th><th>Update Desc</th><th>Effective Time</th><th>Expiry Time</th></tr>");
var ns = ["spID","productID","serviceID","serviceList","updateType","updateTime","updateDesc","effectiveTime","expiryTime"];
var c = new Array();
for(i=0; i < ns.length; i++){
  var d = xmlDoc.getElementsByTagName("ns1:"+ns[i]+"")[0].firstChild.nodeValue;
  c.push(d);
}
document.write("<tr>");
var y=xmlDoc.getElementsByTagName("ns1:userID");
document.write("<td>");
document.write(y[0].getElementsByTagName("ID")[0].childNodes[0].nodeValue);
document.write("</td>");
document.write("<td>");
document.write(y[0].getElementsByTagName("type")[0].childNodes[0].nodeValue);
document.write("</td>");
for(j=0; j<c.length; j++){
  document.write("<td>");
  document.write(c[j]);
  document.write("</td>");
}
document.write("</tr>");
document.write("</table>");






document.write("<table border='1'>");
document.write("<tr><th>Key</th><th>Value</th></tr>");

var x=xmlDoc.getElementsByTagName("item");
for (i=0;i<x.length;i++)
  { 
  document.write("<tr><td>");
  document.write(x[i].getElementsByTagName("key")[0].childNodes[0].nodeValue);
  document.write("</td><td>");
  document.write(x[i].getElementsByTagName("value")[0].childNodes[0].nodeValue);
  document.write("</td></tr>");
  }
document.write("</table>");