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

        $query = mysql_query("select * from tbl_user_info_login where password = '$password' AND user_id = '$username'");
        echo $query;
        $rows = mysql_num_rows($query);
        $row = mysql_fetch_assoc($query);
        $user_role = $row['user_role'];
        echo $rows;
        if($rows == 1 && $user_role == 'user')
        {
            $_SESSION['user_login'] = $username;
            $_SESSION['user_id'] = $rows["id"];
            header("Location: profile.php");
        }
        elseif($rows == 1 && $user_role == 'admin')
        {
            $_SESSION['user_login'] = $username;
            $_SESSION['user_id'] = $rows["id"];
            header("Location: admin_profile.php");
        }
        else
        {
            $error = "Username or Password is Invalid";
        }
    }
}










?>