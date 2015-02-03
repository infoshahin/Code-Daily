<?php
include('connection.php');

$error = '';
if(isset($_POST['log_submit']))
{
    if(empty($_POST['username']) || empty($_POST['password']))
    {
        $error = "Username or Password is Invalid";
    }
    else
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $username = stripslashes($username);
        $password = stripslashes($password);
        $username = mysql_real_escape_string(trim($username));
        $password = mysql_real_escape_string(trim($password));

        $query = mysql_query("select * from user_info where password = '$password' AND username = '$username'");
        echo $query;
        $rows = mysql_num_rows($query);
        $row = mysql_fetch_assoc($query);
        if($rows == 1)
        {
            $_SESSION['username'] = $row["username"];
            header("Location: operations.php");
        }
        else
        {
            $error = "Username or Password is Invalid";
        }
    }
}










?>