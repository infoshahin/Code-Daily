<?php
include('session.php');
include_once("header.php");
if(isset($_POST['admin_search']))
{
    function list_transactions()
    {
        $output = "";
        $from_date = $_POST['date_from'];
        $to_date = $_POST['date_to'];
        $query_to_fetch_data = "SELECT * FROM tbl_transaction WHERE DATE(transaction_date) BETWEEN '$from_date' AND '$to_date'";
        $result = mysql_query($query_to_fetch_data);
        while ($row = mysql_fetch_array($result)){
            $output .= '
      <tr>
      <td>' . $row['transaction_id'].'</td>
      <td>' . $row['customer_msisdn'] . '</td>
      <td>' . $row['from_acc_num'] . '</td>
      <td>' . $row['to_acc_num'] . '</td>
      <td>' . $row['amount'] . '</td>
      <td>' . $row['transaction_date'] . '</td>
      <td>' . $row['status'] . '</td>
      </tr>';
        }
        echo $output;
    }
}

?>
    <head>
        <div id="user_profile">
            <b id="welcome">Welcome: <i><?php echo $login_session; ?></i></b>
            <b id="logout"><a href="logout.php">Log Out</a></b>
            <!--<b><input name="logout" type="button" value="Log Out"></b>-->
        </div>
    </head>
    <div id="details">
        <table border="1">
            <tr>
                <th>Transaction ID</th>
                <th>MSISDN</th>
                <th>From</th>
                <th>To</th>
                <th>Amount</th>
                <th>Date</th>
                <th>Status</th>
            </tr>
            <?php
            list_transactions();
            ?>
        </table>
    </div>

<a href="admin_profile.php"><input name="back_to_profile_page" type="button" value=" Go Back To Profile "/></a>

<?php
include_once("footer.php");
?>