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
        include('session.php');
        include_once("header.php");
        function list_count()
        {
            $output = "";
            if(isset($_POST["search"]))
            {
                if(isset($_POST["request_from"]) && isset($_POST["in_telco"]) && isset($_POST["out_telco"]) && isset($_POST["map_user"]))
                {
                    $request_from = $_POST["request_from"];
                    $in_telco = $_POST["in_telco"];
                    $out_telco = $_POST["out_telco"];
                    $map_user = $_POST {"map_user"};
                    $query_report = "SELECT * FROM tbl_routing_table WHERE 1=1";
                    if($request_from != "Please Select")
                    {
                        $query_report .=" AND REQUEST_FROM = '$request_from'";
                    }
                    if ($in_telco != "Please Select")
                    {
                        $query_report .=" AND IN_TELCO = '$in_telco'";
                    }
                    if ($out_telco != "Please Select")
                    {
                        $query_report .=" AND OUT_TELCO = '$out_telco'";
                    }
                    if ($map_user != "Please Select")
                    {
                        $query_report .=" AND MAPUSR = '$map_user'";
                    }
                    $fetch_report = mysql_query ($query_report) or die (mysql_error());
                    while($row = mysql_fetch_array($fetch_report))
                    {
                        $output .= '
      <tr>
      <td>' . $row['REQUEST_FROM'].'</td>
      <td>' . $row['IN_TELCO'] . '</td>
      <td>' . $row['OUT_TELCO'] . '</td>
      <td>' . $row['MAPUSR'] . '</td>
      </tr>';
                    }
                    echo $output;
                    echo "</table>";
                }

            }
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
            <table border="1" align="center">
                <tr>
                    <th>Request From</th>
                    <th>In Telco</th>
                    <th>Out Telco</th>
                    <th>Map User</th>
                </tr>
                <?php
                list_count();
                ?>
        </div>
        <a href="profile.php"><input name="back_to_profile_page" type="button" value=" Go Back To Profile "/></a>
        <a href="report.php"><input name="back_to_report_page" type="button" value=" Show Report "/></a>
        <?php
        include_once("footer.php");
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
