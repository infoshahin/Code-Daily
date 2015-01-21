<?php
include('session.php');
include_once("header.php");
function list_routing()
{
    $output = "";
    $query_to_fetch_data = "SELECT * FROM tbl_routing_table";
    $result_data = mysql_query($query_to_fetch_data);
    while ($row = mysql_fetch_array($result_data))
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
}

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