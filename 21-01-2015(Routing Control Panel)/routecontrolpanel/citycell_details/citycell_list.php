<?php
include('../session.php');
include_once("../header.php");
?>
    <title>User Profile: <?php echo $login_session_user?></title>
    <link href="../style.css" rel="stylesheet" type="text/css">
    <div id="user_profile">
        <b id="welcome">Welcome: <i><?php echo $login_session_user; ?></i></b>
        <b id="logout"><a href="../logout.php">Log Out</a></b>
        <!--<b><input name="logout" type="button" value="Log Out"></b>-->
    </div>
    <form action="citycell_details.php" method="POST">
        <div id="citycell_details_portion">
            <h2>Citycell Stakeholders</h2>
            <br>
            Stakeholders
            <?php
            if(isset($_POST["search_citycell"]))
            {
                $masking = mysql_real_escape_string($_POST["search_citycell_masking"]);
                $query = "SELECT STAKEHOLDER_UID FROM stakeholder_ctrl WHERE BRAND_NAME= '$masking';";
                $result = mysql_query($query);
                echo'<select name="citycell_list">';
                echo '<option>Please Select</option>';
                while($row = mysql_fetch_array( $result ))
                {
                    echo '<option value="'.$row['STAKEHOLDER_UID'].'">' . $row['STAKEHOLDER_UID'] . '</option>';
                }
                echo '</select>';
            }
            ?>
            <br>
            <!--<a href="details.php">--><input name="show_details" type="submit" value=" Show Details "/></a>
        </div>
    </form>
    <a href="../profile.php"><input name="back_to_profile_page" type="button" value=" Go Back To Profile "/></a>
<?php
include_once("../footer.php");
?>