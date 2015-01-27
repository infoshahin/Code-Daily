<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Premium Series
Description: A three-column, fixed-width blog design.
Version    : 1.0
Released   : 20090303

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>SSL Wireless Gateway Admin</title>
    <meta name="keywords" content="" />
    <meta name="Premium Series" content="" />
    <link href="default.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<!-- start header -->
<div id="header">
    <div id="logo">
        <h1><a href="http://localhost:8080/gatewayadmin/profile.php"><span>Gateway</span>Admin</a></h1>

    </div>
    <div id="menu">
        <ul id="main">
            <li class="current_page_item"><a href="http://localhost:8080/gatewayadmin/profile.php">Homepage</a></li>
            <li><a href="http://localhost:8080/gatewayadmin/gp.php">Grameen</a></li>
            <li><a href="http://localhost:8080/gatewayadmin/bl.php">Banglalink</a></li>
            <li><a href="http://localhost:8080/gatewayadmin/aktel.php">Robi</a></li>
            <li><a href="http://localhost:8080/gatewayadmin/warid.php">Airtel</a></li>
            <li><a href="http://localhost:8080/gatewayadmin/cc.php">Citycell</a></li>
            <li><a href="http://localhost:8080/gatewayadmin/tt.php">Teletalk</a></li>
            <li><a href="#"></a></li><li><a href="#"></a></li>
            <li><a href="http://localhost:8080/gatewayadmin/logout.php">Logout</a></li>
        </ul>
    </div>

</div>
<!-- end header -->
<div id="wrapper">
    <!-- start page -->
    <div id="page">
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
        <form action="bl_details.php" method="POST">
            <div id="bl_details_portion">
                <h2>Banglalink Stakeholders</h2>
                <br>
                Stakeholders
                <?php
                if(isset($_POST["search_bl"]))
                {
                    $masking = mysql_real_escape_string($_POST["search_bl_masking"]);
                    $query = "SELECT STAKEHOLDER_UID FROM stakeholder_ctrl WHERE BRAND_NAME= '$masking';";
                    $result = mysql_query($query);
                    echo'<select name="bl_list">';
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
    </div>
    <!-- end page -->
</div>
<div id="footer">
    <p class="copyright">&copy;&nbsp;&nbsp;2009 All Rights Reserved &nbsp;&bull;&nbsp; Design by <a href="http://www.sslwireless.com/">SSLWireless</a>.</p>
    <p class="link"><a href="#">Privacy Policy</a>&nbsp;&#8226;&nbsp;<a href="http://www.sslwireless.com/">Terms of Use</a></p>
</div>
</body>
</html>
