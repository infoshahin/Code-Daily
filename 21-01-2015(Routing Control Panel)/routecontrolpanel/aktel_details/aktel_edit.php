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
<!---->
<?php
//if(isset($_GET['ID']))
//{
//    $id=$_GET['ID'];
//    if(isset($_POST['submit']))
//    {
//        $request_from=$_POST['REQUEST_FROM'];
//        $in_telco=$_POST['IN_TELCO'];
//        $map_user=$_POST['MAPUSR'];
//        $out_telco=$_POST['OUT_TELCO'];
//        $query_to_update=mysql_query("update tbl_routing_table set REQUEST_FROM='$request_from', IN_TELCO='$in_telco', OUT_TELCO='$out_telco', MAPUSR='$map_user' where ID='$id'");
//        if($query_to_update)
//        {
//            header('location:aktel_details.php');
//        }
//    }
//    $query_to_fetch_data=mysql_query("select * from tbl_routing_table where ID='$id'");
//    $row_fetch=mysql_fetch_array($query_to_fetch_data);
//    ?>
<!--    <form method="post" action="">-->
<!--        Name:<input type="text" name="name" value="--><?php //echo $query2['name']; ?><!--" /><br />-->
<!--        Age:<input type="text" name="age" value="--><?php //echo $query2['age']; ?><!--" /><br /><br />-->
<!--        <br />-->
<!--        <input type="submit" name="submit" value="Update" />-->
<!--    </form>-->
<?php
//}
//?>
<?php
if(isset($_GET["ID"]))
{
    $id= $_GET["ID"];
    if(isset($_POST["submit"]))
    {
        $out_telco = $_POST["out_telco"];
        $map_user = $_POST["map_user"];
        $query_to_update = mysql_query("update tbl_routing_table set OUT_TELCO='$out_telco', MAPUSR='$map_user' where ID='$id'");
        if($query_to_update)
        {
            header('location:aktel_details.php');
        }
    }
    $query_for_out_telco = "SELECT * FROM out_telco";
    $result_for_out_telco = mysql_query($query_for_out_telco);
    echo'<select name="out_telco">';
    while($row = mysql_fetch_array( $result_for_out_telco ))
    {
        echo '<option>Please Select</option>';
        echo '<option value="'.$row['id'].'">' . $row['telco_name'] . '</option>';
    }
    echo '</select>';

    $query_for_mapuser = "SELECT * FROM map_user";
    $result_for_map_user = mysql_query($query_for_mapuser);
    echo'<select name="map_user">';
    while($row = mysql_fetch_array( $result_for_map_user ))
    {
        echo '<option>Please Select</option>';
        echo '<option value="'.$row['int'].'">' . $row['map_user'] . '</option>';
    }
    echo '</select>';
    ?>
<?php
}
?>
    <input type="submit" name="submit" value="Update" />
    <a href="../profile.php"><input name="back_to_profile_page" type="button" value=" Go Back To Profile "/></a>
<?php
include_once("../footer.php");
?>