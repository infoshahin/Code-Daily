<?php
include('connection.php');

$user_check = $_SESSION['user_login'];

$query = mysql_query("select id,username,is_active from users where username = '$user_check'");
$row = mysql_fetch_assoc($query);
$id = $row['id'];
$username = $row['username'];
$user_is_active = $row['is_active'];
if(!isset($id) && !isset($username) && !isset($user_is_active))
{
    header('Location: index.php');
}
?>