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

    echo "<a href='report.php?page=1'>"."|<"."</a>"; // Goto 1st page

    for ($i=1; $i<=$total_pages; $i++) {
        echo "<a href='report.php?page=".$i."'>".$i."</a>";
    };
    echo "<a href='report.php?page=$total_pages'>".">|"."</a>"; // Goto last
}

?>
<title>User Profile: <?php echo $login_session_user?></title>
<div id="user_profile">
    <b id="welcome">Welcome: <i><?php echo $login_session_user; ?></i></b>
    <b id="logout"><a href="logout.php">Log Out</a></b>
    <!--<b><input name="logout" type="button" value="Log Out"></b>-->
</div>
<div id="search_option">
    <form method="post" action="search_report.php">
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