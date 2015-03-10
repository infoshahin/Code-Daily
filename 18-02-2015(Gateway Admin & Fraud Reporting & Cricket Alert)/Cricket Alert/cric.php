<?php
//if(isset($_GET['msisdn']) && isset($_GET['shortcode']) && isset($_POST['sms']))
//{
$msisdn= $_GET['msisdn'];
$shortcode = $_GET['shortcode'];
$sms = $_GET['sms'];

$url_score_update = "http://192.168.92.138/cricket/index_crc.php";
$file = fopen($url_score_update, 'r');
$full_score = fread($file, 1000000);

echo $full_score;
//}
?>