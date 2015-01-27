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
        if(isset($_POST["show_details"]))
        {
            $request_from = $_POST["gp_list"];
            $query_for_gp = "SELECT * FROM tbl_routing_table WHERE REQUEST_FROM = '$request_from' && IN_TELCO = 'GRAMEEN';";
            $result = mysql_query($query_for_gp);
            $row = mysql_fetch_assoc($result);
        }
        ?>
        <title>User Profile: <?php echo $login_session_user?></title>
        <link href="../style.css" rel="stylesheet" type="text/css">
        <div id="user_profile">
            <b id="welcome">Welcome: <i><?php echo $login_session_user; ?></i></b>
            <b id="logout"><a href="../logout.php">Log Out</a></b>
            <!--<b><input name="logout" type="button" value="Log Out"></b>-->
        </div>
        <div id="details">
            <table border="1" align = "center">
                <tr>
                    <th>Request From</th>
                    <th>In Telco</th>
                    <th>Out Telco</th>
                    <th>Map User</th>
                </tr>
                <tr>
                    <td><?php echo $row["REQUEST_FROM"] ?></td>
                    <td><?php echo $row["IN_TELCO"] ?></td>
                    <td><?php echo $row["OUT_TELCO"] ?></td>
                    <td><?php echo $row["MAPUSR"] ?></td>
                    <td><?php echo "<td><a href='http://localhost:8080/gatewayadmin/gp_details/gp_edit.php?id=".$row["ID"]."'>Edit</a></td>";?></td>
                </tr>
            </table>
        </div>
        <a href="../profile.php"><input name="back_to_profile_page" type="button" value=" Go Back To Profile "/></a>
        <?php
        include_once("../footer.php");
        ?>
        <html>
        <body>

    </div>
    <!-- end page -->
</div>
<div id="footer">
    <p class="copyright">&copy;&nbsp;&nbsp;2009 All Rights Reserved &nbsp;&bull;&nbsp; Design by <a href="http://www.sslwireless.com/">SSLWireless</a>.</p>
    <p class="link"><a href="#">Privacy Policy</a>&nbsp;&#8226;&nbsp;<a href="http://www.sslwireless.com/">Terms of Use</a></p>
</div>
</body>
</html>
