<?php

include('session.php');
if(isset($_POST["show_details"]))
{
    $account_number = $_POST["account_list"];
    $query = "SELECT account_number, balance FROM tbl_account_info WHERE customer_id = '$customer_id' AND account_number='$account_number'";
    $result = mysql_query($query);
    $row = mysql_fetch_assoc($result);
}
?>
<html>
<head>
    <title>Account Details</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <div id="user_profile">
        <b id="welcome">Welcome: <i><?php echo $login_session; ?></i></b>
        <b id="logout"><a href="logout.php">Log Out</a></b>
        <!--<b><input name="logout" type="button" value="Log Out"></b>-->
    </div>
</head>
<body>
<div id="details">
<table border="1" style="width:50%" align = "center">
    <tr>
        <th>Account Number</th>
        <th>Balance</th>
    </tr>
    <tr>
        <td><?php echo $row["account_number"] ?></td>
        <td><?php echo $row["balance"] ?></td>
    </tr>
</table>
</div>
<a href="profile.php"><input name="back_to_profile_page" type="button" value=" Go Back To Profile "/></a>
</body>
</html>


