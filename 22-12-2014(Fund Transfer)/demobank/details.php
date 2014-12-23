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
<body>
<table>
    <tr>
        <td>Account Number</td>
        <td>Balance</td>
    </tr>
    <?php //while($row) ?>
    <tr>
        <td><?php echo $row["account_number"] ?></td>
        <td><?php echo $row["balance"] ?></td>
    </tr>
</table>
</body>
</html>


