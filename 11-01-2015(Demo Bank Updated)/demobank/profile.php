<?php
include('session.php');
include_once("header.php");
?>
<title>User Profile: <?php echo $login_session?></title>
<div id="user_profile">
<b id="welcome">Welcome: <i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
<!--<b><input name="logout" type="button" value="Log Out"></b>-->
</div>
<div class="tab">
    <ul class="nav nav-tabs">
        <li class="nav_active"><a href="#account_details" data-toggle="tab">Account Details</a></li>
        <li class="nav"><a href="#fund_transfer" data-toggle="tab">Fund Transfer</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">

        <div class="tab-pane fade in active" id="account_details">
            <form action="details.php" method="POST">
            <div id="account_details_portion">
                <h2>Account Details</h2>
                <label>Accounts</label>
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
        </div>
        <div class="tab-pane fade" id="fund_transfer">
            <form action="" method="">
<div id="fund_transfer_portion">
    <h2>Fund Transfer</h2>
    <br>
    <label>Account List: </label>
    <?php     $query = "SELECT account_number FROM tbl_account_info WHERE customer_id = '$customer_id'";
    $result = mysql_query($query);
    echo'<select name="account_list">';
    while($row = mysql_fetch_assoc( $result )) {
        echo '<option value="'.$row['account_number'].'">' . $row['account_number'] . '</option>';
    }
    echo '</select>';?>
    <br>
    <p>Are you sure you want to transfer fund between two accounts?</p>
    <a href="fund_transfer.php"><input name="go_fund_transfer" type="button" value=" Yes "/></a>
    <a href="profile.php"><input name="go_fund_transfer" type="button" value=" No "/></a>
    </div>
</form>
        </div>
    </div>
</div>



<?php
    include_once("footer.php");
?>