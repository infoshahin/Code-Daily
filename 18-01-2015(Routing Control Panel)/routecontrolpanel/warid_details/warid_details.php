<?php
include('../session.php');
include_once("../header.php");
if(isset($_POST["show_details"]))
{
    $request_from = $_POST["warid_list"];
    $query = "SELECT * FROM tbl_routing_table WHERE REQUEST_FROM = '$request_from' && IN_TELCO = 'WARID';";
    $result = mysql_query($query);
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
    <table border="1" style="width:50%" align = "center">
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
        </tr>
    </table>
</div>
<a href="../profile.php"><input name="back_to_profile_page" type="button" value=" Go Back To Profile "/></a>
<?php
include_once("../footer.php");
?>
<html>
<body>
