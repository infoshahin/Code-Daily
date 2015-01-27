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
            $num_rec_per_page=10;
            if (isset($_GET["page"]))
            {
                $page  = $_GET["page"];
            }
            else
            {
                $page=1;
            };
            $start_from = ($page-1) * $num_rec_per_page;

            $sql_for_pagination = "SELECT * FROM tbl_routing_table LIMIT $start_from, $num_rec_per_page";
            $pagination_query = mysql_query ($sql_for_pagination) or die (mysql_error());
            while($row = mysql_fetch_array($pagination_query))
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
            $sql = "SELECT * FROM tbl_routing_table";
            $rs_result = mysql_query($sql); //run the query
            $total_records = mysql_num_rows($rs_result);  //count number of records
            $total_pages = ceil($total_records / $num_rec_per_page);

            echo "<a href='http://localhost:8080/gatewayadmin/report.php?page=1'>"."|<"."</a>"; // Goto 1st page

            for ($i=1; $i<=$total_pages; $i++) {
                echo "<a href='report.php?page=".$i."'>".$i."</a>";
            };
            echo "<a href=http://localhost:8080/gatewayadmin/'report.php?page=$total_pages'>".">|"."</a>"; // Goto last
        }

        ?>
        <title>User Profile: <?php echo $login_session_user?></title>
        <div id="user_profile">
            <b id="welcome">Welcome: <i><?php echo $login_session_user; ?></i></b>
            <b id="logout"><a href="logout.php">Log Out</a></b>
            <!--<b><input name="logout" type="button" value="Log Out"></b>-->
        </div>
        <div id="search_option">
            <form method="post" action="http://localhost:8080/gatewayadmin/search_report.php">
                <?php
                $query_for_request_from = "SELECT * FROM stakeholder_ctrl";
                $result_for_request_from = mysql_query($query_for_request_from);
                echo "Request From:";
                echo "&nbsp;";
                echo'<select name="request_from">';
                echo '<option>Please Select</option>';
                while($row = mysql_fetch_array( $result_for_request_from ))
                {
                    echo '<option value="'.$row['STAKEHOLDER_UID'].'">' . $row['STAKEHOLDER_UID'] . '</option>';
                }
                echo '</select>';
                echo "&nbsp;";

                $query_for_in_telco = "SELECT * FROM in_telco";
                $result_for_in_telco = mysql_query($query_for_in_telco);
                echo "In Telco:";
                echo "&nbsp;";
                echo'<select name="in_telco">';
                echo '<option>Please Select</option>';
                while($row = mysql_fetch_array( $result_for_in_telco ))
                {
                    echo '<option value="'.$row['telco_name'].'">' . $row['telco_name'] . '</option>';
                }
                echo '</select>';
                echo "&nbsp;";

                $query_for_out_telco = "SELECT * FROM out_telco";
                $result_for_out_telco = mysql_query($query_for_out_telco);
                echo "Out Telco:";
                echo "&nbsp;";
                echo'<select name="out_telco">';
                echo '<option>Please Select</option>';
                while($row = mysql_fetch_array( $result_for_out_telco ))
                {
                    echo '<option value="'.$row['telco_name'].'">' . $row['telco_name'] . '</option>';
                }
                echo '</select>';
                echo "&nbsp;";

                $query_for_map_user = "SELECT * FROM map_user";
                $result_for_map_user = mysql_query($query_for_map_user);
                echo "Map User:";
                echo "&nbsp;";
                echo'<select name="map_user">';
                echo '<option>Please Select</option>';
                while($row = mysql_fetch_array( $result_for_map_user ))
                {
                    echo '<option value="'.$row['map_user'].'">' . $row['map_user'] . '</option>';
                }
                echo '</select>';
                echo "&nbsp;";
                ?>
                <br>
                <!--<a href="details.php">--><input name="search" type="submit" value=" Search "/></a>
            </form>
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
