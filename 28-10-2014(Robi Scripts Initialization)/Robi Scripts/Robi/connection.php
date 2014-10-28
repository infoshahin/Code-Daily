<?php
	//From Serve
	session_start();
	$connection = mysql_connect('localhost','root','') or die("connection Error!");
	mysql_select_db("robi_sdp") or die("Selection Error!");
	
	/*$connection = mysql_connect("192.168.10.22","hsbc","R#$32%EF") or die("connection Error!");
	mysql_select_db("hsbcdb") or die("Selection Error!");*/
	
	/*$connection = mysql_connect("192.168.20.55","common","common") or die("connection Error!");
	mysql_select_db("hsbc_template") or die("Selection Error!");*/




	//From localhost
	/*mysql_connect("localhost","root","") or die("connection Error!");
	mysql_select_db("onlinefood") or die("Selection Error!");
*/
?>
