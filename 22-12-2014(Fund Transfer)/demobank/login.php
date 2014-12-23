<?php
include('session.php');
$error = '';
if(isset($_POST['submit']))
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
        $username = mysql_real_escape_string($username);
        $password = mysql_real_escape_string($password);

        $query = mysql_query("select * from tbl_user_info_login where password = '$password' AND user_id = '$username'");
        echo $query;
        $rows = mysql_num_rows($query);
        echo $rows;
        if($rows == 1)
        {
            $_SESSION['user_login'] = $username;
            header("Location: profile.php");
        }
        else
        {
            $error = "Username or Password is Invalid";
        }
    }
}
?>