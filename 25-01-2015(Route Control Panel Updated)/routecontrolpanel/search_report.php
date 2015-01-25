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