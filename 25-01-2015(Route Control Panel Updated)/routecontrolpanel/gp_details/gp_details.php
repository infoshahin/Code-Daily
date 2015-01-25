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
            <td><?php echo "<td><a href='gp_edit.php?id=".$row["ID"]."'>Edit</a></td>";?></td>
        </tr>
    </table>
</div>
<a href="../profile.php"><input name="back_to_profile_page" type="button" value=" Go Back To Profile "/></a>
<?php
include_once("../footer.php");
?>
<html>
<body>
