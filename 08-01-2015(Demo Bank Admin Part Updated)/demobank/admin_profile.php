<?php
include('session.php');
include_once("header.php");
?>
<html>
<head>
    <title>User Profile: <?php echo $login_session?></title>
    <div id="user_profile">
        <b id="welcome">Welcome: <i><?php echo $login_session; ?></i></b>
        <b id="logout"><a href="logout.php">Log Out</a></b>
    </div>
</head>
<body>
<h2>Transaction Details</h2>
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
      function list_transactions()
      {
          $output = "";
          $result = mysql_query("SELECT * FROM tbl_transaction");
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
    list_transactions();
    ?>
   </table>
</div>
</body>
</html>