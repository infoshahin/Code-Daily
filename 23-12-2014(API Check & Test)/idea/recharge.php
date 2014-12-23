<?php
$username = "test20111027a";
$password = "1234";
$recharge_pin= "012345678";
$remark = "";



$url = "http://223.27.112.66:8080/vms45soap/services/SoapProvisioning/recharge?userName=$username&rechargePin=$recharge_pin&rechargePassword=$password&remark=$remark";
$file = fopen($url, 'r');
$msg_reply = fread($file, 10000);
echo $msg_reply;
