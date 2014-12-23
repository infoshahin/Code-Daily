<?php
$username = "test20111027a";
$remark = "";



$url = "http://223.27.112.66:8080/vms45soap/services/SoapProvisioning/checkRemainBalance?userName=$username&remark=$remark";
$file = fopen($url, 'r');
$msg_reply = fread($file, 10000);
echo $msg_reply;