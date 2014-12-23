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
<b id="logout"><a href="index.php">Log Out</a></b>
</div>
<form action="details.php" method="POST">
<div id="account_details">
    <label>Account Details</label>
<?php     $query = "SELECT account_number FROM tbl_account_info WHERE customer_id = (SELECT id FROM tbl_user_info_login WHERE user_id = '$login_session')";
$result = mysql_query($query);
echo'<select name="account_list">';
while($row = mysql_fetch_assoc( $result )) {
    echo '<option value="'.$row['account_number'].'">' . $row['account_number'] . '</option>';
}
echo '</select>';?>
    <!--<a href="details.php">--><input name="show_details" type="submit" value=" Show Details "/></a>
<!--    --><?php /*if(isset($_POST['show_details']))
    {
        header("Location: details.php");
    }
    */?>
</div>
</form>
<div id="fund_transfer">
    <label>Fund Transfer</label>
    <br>
    <label>From: </label>
    <?php     $query = "SELECT account_number FROM tbl_account_info WHERE customer_id = (SELECT id FROM tbl_user_info_login WHERE user_id = '$login_session')";
    $result = mysql_query($query);
    echo'<select name="account_list">';
    while($row = mysql_fetch_assoc( $result )) {
        echo '<option value="'.$row['account_number'].'">' . $row['account_number'] . '</option>';
    }
    echo '</select>';?>
    <br>
    <label>To: </label>
    <?php     $query = "SELECT account_number FROM tbl_account_info WHERE customer_id = (SELECT id FROM tbl_user_info_login WHERE user_id = '$login_session')";
    $result = mysql_query($query);
    echo'<select name="account_list">';
    while($row = mysql_fetch_assoc( $result )) {
        echo '<option value="'.$row['account_number'].'">' . $row['account_number'] . '</option>';
    }
    echo '</select>';?>
    <br>
    <label>Amount :</label>
    <input id="amount" name="amount" placeholder="amount" type="text">
    <br>
    <input name="fund_transfer" type="button" value=" Fund Transfer "/></a>
</div>
</body>
    </html>