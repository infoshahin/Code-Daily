<?php
$username = "test2011a";
$calling = "12345678";
$tag_number= "55";
$remark = "";



$url = "http://223.27.112.66:8080/vms45soap/services/SoapProvisioning/createCalling?userName=$username&calling=$calling&tagNo=$tag_number&remark=$remark";
$file = fopen($url, 'r');
$msg_reply = fread($file, 10000);
echo $msg_reply;