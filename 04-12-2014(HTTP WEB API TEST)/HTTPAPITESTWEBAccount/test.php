<?php
$from = "IRFAN";
$msisdn = 8801674776945;
$msg_text= "Hello";

$url = "http://217.118.27.5/bulksms/bulksend.go?username=iftekhar@sslwireless.com&password=146EB9E1&originator=.$from.&phone=.$msisdn.7&msgtext=.$msg_text";
$file = fopen($url, 'r');
$handle = fread($file, 10000);
echo $handle;
//echo "Hello";

?>