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

var items= xmlDoc.getElementsByTagName('ns1:syncOrderRelation');
var d_output= document.getElementById('d');
parseFromXml(d_output, items[0]);

function parseFromXml(output, parent) {
        //Parent Item Tree
        for (var i= 0; i<parent.childNodes.length; i++) {
          var child= parent.childNodes[i];
          //alert(child);
          if (child.nodeType==3) {  // TEXT_NODE
              document.write("<p>"+child.nodeValue+"</p>");
          }
          if (child.nodeType==1) {  // ELEMENT_NODE        
              document.write("<p>"+child.nodeName+"</p>"); //Print: "ITEM" as Element Name
              for(var a = 0; a<child.childNodes.length; a++){
                var sub_child = child.childNodes[a];
                if(sub_child.nodeType == 3){
                  document.write("<p>"+sub_child.nodeValue+"</p>")
                }
                if(sub_child.nodeType == 1){
                  document.write("<p>"+sub_child.nodeName+"</p>"); //Print: "Key" and "Value" as Element Name
                  for(var b=0; b<sub_child.childNodes.length; b++){
                    var sub2_child = sub_child.childNodes[b];
                    if(sub2_child.nodeType == 3){
                      document.write("<p>"+sub2_child.nodeValue+"</p>")
                    }
                    if(sub2_child.nodeType == 1){
                      document.write("<p>"+sub2_child.nodeName+"</p>"); //Print: "Nothing" as Element Name
                      for(var c=0; c<sub2_child.childNodes.length; c++){
                        var sub3_child = sub2_child.childNodes[c];
                        if(sub3_child.nodeType == 3){
                          document.write("<p>"+sub3_child.nodeValue+"</p>")
                        }
                        if(sub3_child.nodeType == 1){
                          document.write("<br><p>"+sub3_child.nodeName+"</p>"); //Print: "Nothing" as Element Name
                          for(var d=0; d<sub_child.childNodes.length; d++){
                            var sub4_child = sub3_child.childNodes[d];
                            if(sub4_child.nodeType == 3){
                              document.write("<p>"+sub4_child.nodeValue+"</p>")
                            }
                            if(sub4_child.nodeType == 1){
                              document.write("<p>"+sub4_child.nodeName+"</p>"); //Print: "Nothing" as Element Name
                            }
                          }
                        }
                      }
                    }
                  }
                }
              }
          }
        }
        return ouput;
}
