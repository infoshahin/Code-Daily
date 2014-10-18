<?php
require_once('lib/nusoap.php');
$wsdl = "https://localhost/WebServiceSOAP/server.php?wsdl";

//create client object
$client = new nusoap_client($wsdl, 'wsdl');

$err = $client->getError();
if ($err) {
// Display the error
    echo '<h2>Constructor error</h2>' . $err;
// At this point, you know the call that follows will fail
    exit();
}

//calling our first simple entry point
$result1=$client->call('hello', array('username'=>'Daanish'));
print_r($result1);
print_r("<br/><br/><br/><br/>");

//call second function which return complex type
$result2 = $client->call('login', array('username'=>'john', 'password'=>'doe') );
//$result2 would be an array/struct
print_r("<table border='1'>");
print_r("<tr>");
print_r("<td>");
echo $result2['id_user'];
print_r("</td>");
print_r("<td>");
echo $result2['fullname'];
print_r("</td>");
print_r("<td>");
echo $result2['email'];
print_r("</td>");
print_r("<td>");
echo $result2['level'];
print_r("</td>");
print_r("</tr>");
print_r("</table>");