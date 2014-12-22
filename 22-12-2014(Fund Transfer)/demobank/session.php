<?php
include('connection.php');

$user_check = $_SESSION['user_login'];

$query = mysql_query("select user_id from tbl_user_info_login where user_id = '$user_check'");
$row = mysql_fetch_assoc($query);
$login_session = $row['user_id'];
if(!isset($login_session))
{
    header('Location: index.php');
}

//$query2= mysql_query("SELECT id FROM tbl_user_info_login WHERE user_id = $user_check");
//$row = mysql_fetch_array($query2);
?>