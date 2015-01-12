<?php
include('session.php');
include_once("header.php");
?>
<title>Fund Transfer</title>
    <div id="user_profile">
        <b id="welcome">Welcome: <i><?php echo $login_session; ?></i></b>
        <b id="logout"><a href="logout.php">Log Out</a></b>
        <!--<b><input name="logout" type="button" value="Log Out"></b>-->
    </div>
<form action="" method="POST">
<div id="fund_transfer_portion">
    <h2>Fund Transfer</h2>
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
while($row = mysql_fetch_assoc( $result ))
{
    echo '<option value="'.$row['account_number'].'">' . $row['account_number'] . '</option>';
}
echo '</select>';?>
<br>
<label>Amount :</label>
<input id="amount" name="amount" placeholder="amount" type="text">
<br>
<input name="fund_transfer" type="submit" value=" Fund Transfer "/>
<br>
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
    elseif($amount < 0)
    {
        echo "Transfer amount can never be a negative number. Fund transfer failed";
    }
    else
    {
        $subtract_balance = $from_balance - $amount;
        $add_balance = $to_balance + $amount;
        $query_subtract_balance = mysql_query("UPDATE tbl_account_info SET balance='$subtract_balance' WHERE account_number='$from_account_number'");
        $query_add_balance = mysql_query("UPDATE tbl_account_info SET balance='$add_balance' WHERE account_number='$to_account_number'");
        $transaction_id = uniqid();
        date_default_timezone_set("Asia/Dhaka");
        $transaction_time = date("Y-m-d H:i:s");
        $get_msisdn_query = mysql_query("SELECT customer_msisdn FROM tbl_customer_info WHERE id = '$customer_id'");
        $get_msisdn_result = mysql_fetch_assoc($get_msisdn_query);
        $msisdn = $get_msisdn_result["customer_msisdn"];
        $msisdn = "88".substr(str_replace("-","",$msisdn), -11);
        $query_transaction = mysql_query("INSERT INTO tbl_transaction (transaction_id, customer_msisdn, from_acc_num, to_acc_num, amount, transaction_date) VALUES ('$transaction_id', '$msisdn', '$from_account_number', '$to_account_number', '$amount', '$transaction_time')");
        echo "An sms has been sent to $msisdn. Please type 'yes' and send it to 6969 for confirmation ";
    }
}
?>
</div>
    <a href="profile.php"><input name="back_to_profile_page" type="button" value=" Go Back To Profile "/></a>
</form>

<?php
include_once("footer.php");
?>