<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="profile">
<b id="welcome">Welcome: <i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
<!--<b><input name="logout" type="button" value="Log Out"></b>-->
</div>
<form action="details.php" method="POST">
<div id="account_details_portion">
    <label>Account Details</label>
<?php     $query = "SELECT account_number FROM tbl_account_info WHERE customer_id = '$customer_id'";
$result = mysql_query($query);
   echo'<select name="account_list">';
    while($row = mysql_fetch_assoc( $result ))
    {
        echo '<option value="'.$row['account_number'].'">' . $row['account_number'] . '</option>';
    }
echo '</select>';?>
    <!--<a href="details.php">--><input name="show_details" type="submit" value=" Show Details "/></a>
</div>
</form>
<form action="" method="POST">
<div id="fund_transfer_portion">
    <label>Fund Transfer</label>
    <br>
    <label>From: </label>
    <?php     $query = "SELECT account_number FROM tbl_account_info WHERE customer_id = '$customer_id'";
    $result = mysql_query($query);
    echo'<select name="from_account_list">';
    while($row = mysql_fetch_assoc( $result )) {
        echo '<option value="'.$row['account_number'].'">' . $row['account_number'] . '</option>';
    }
    echo '</select>';?>
    <br>
    <label>To: </label>
    <?php     $query = "SELECT account_number FROM tbl_account_info WHERE customer_id = '$customer_id'";
    $result = mysql_query($query);
    echo'<select name="to_account_list">';
    while($row = mysql_fetch_assoc( $result )) {
        echo '<option value="'.$row['account_number'].'">' . $row['account_number'] . '</option>';
    }
    echo '</select>';?>
    <br>
    <label>Amount :</label>
    <input id="amount" name="amount" placeholder="amount" type="text">
    <br>
    <input name="fund_transfer" type="submit" value=" Fund Transfer "/></a>
</div>
    <?php
    if(isset($_POST["fund_transfer"]))
    {
        $amount = $_POST['amount'];

        $from_account_number = $_POST["from_account_list"];
        $from_query = "SELECT account_number, balance FROM tbl_account_info WHERE customer_id = '$customer_id' AND account_number='$from_account_number'";
        $from_result = mysql_query($from_query);
        $from_row = mysql_fetch_assoc($from_result);
        $from_balance = $from_row["balance"];

        $to_account_number = $_POST["to_account_list"];
        $to_query = "SELECT account_number, balance FROM tbl_account_info WHERE customer_id = '$customer_id' AND account_number='$to_account_number'";
        $to_result = mysql_query($to_query);
        $to_row = mysql_fetch_assoc($to_result);
        $to_balance = $to_row["balance"];

        if($from_account_number == $to_account_number)
        {
            echo "Fund can't be transferred between the same account. Fund transfer failed";
        }
        elseif(empty($amount))
        {
            echo "Please put an amount you want to transfer. Fund transfer failed";
        }
        elseif($from_balance < $amount)
        {
            echo "You don't have sufficient balance to transfer. Fund transfer failed";
        }
    }
    ?>
</form>
</body>
</html>

