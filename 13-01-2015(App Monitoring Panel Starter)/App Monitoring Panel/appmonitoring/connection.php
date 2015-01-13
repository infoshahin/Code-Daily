<?php
session_start();

$connection = mysql_connect('localhost','root','') or die("connection Error!");
mysql_select_db("app_monitor") or die("Selection Error!");

?>