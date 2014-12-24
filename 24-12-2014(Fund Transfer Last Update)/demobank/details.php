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
</head>
<body>
<table>
    <tr>
        <th>Account Number</th>
        <th>Balance</th>
    </tr>
    <?php //while($row) ?>
    <tr>
        <td><?php echo $row["account_number"] ?></td>
        <td><?php echo $row["balance"] ?></td>
    </tr>
</table>
<a href="profile.php"><input name="back_to_profile_page" type="submit" value=" Go Back To Profile "/></a>
</body>
</html>


