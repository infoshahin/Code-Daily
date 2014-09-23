if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else 
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.open("GET","XmlData.xml",false);
xmlhttp.send();
xmlDoc=xmlhttp.responseXML; 

var getNsSpId = xmlDoc.getElementsByTagName("ns1:spID")[0].firstChild.nodeValue;

document.write("<table border='1'>");
document.write("<tr><th>User ID</th><th>Type</th><th>sp ID</th><th>Product ID</th><th>Service ID</th><th>Service List</th><th>Update Type</th><th>Update Time</th><th>Update Desc</th><th>Effective Time</th><th>Expiry Time</th></tr>");
var getNsDataInArray = ["spID","productID","serviceID","serviceList","updateType","updateTime","updateDesc","effectiveTime","expiryTime"];
var showNsData = new Array();
for(i=0; i < getNsDataInArray.length; i++){
  var putNsDataInArray = xmlDoc.getElementsByTagName("ns1:"+getNsDataInArray[i]+"")[0].firstChild.nodeValue;
  showNsData.push(putNsDataInArray);
}
document.write("<tr>");
var getNsDataSubItem=xmlDoc.getElementsByTagName("ns1:userID");
document.write("<td>");
document.write(getNsDataSubItem[0].getElementsByTagName("ID")[0].childNodes[0].nodeValue);
document.write("</td>");
document.write("<td>");
document.write(getNsDataSubItem[0].getElementsByTagName("type")[0].childNodes[0].nodeValue);
document.write("</td>");
for(j=0; j<showNsData.length; j++){
  document.write("<td>");
  document.write(showNsData[j]);
  document.write("</td>");
}
document.write("</tr>");
document.write("</table>");






document.write("<table border='1'>");
document.write("<tr><th>Key</th><th>Value</th></tr>");

var getItemData=xmlDoc.getElementsByTagName("item");
for (i=0;i<getItemData.length;i++)
  { 
  document.write("<tr><td>");
  document.write(getItemData[i].getElementsByTagName("key")[0].childNodes[0].nodeValue);
  document.write("</td><td>");
  document.write(getItemData[i].getElementsByTagName("value")[0].childNodes[0].nodeValue);
  document.write("</td></tr>");
  }
document.write("</table>");