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

    <div id="details">
        <form method="POST" action="">
            <?php
            if(isset($_GET["id"]))
            {
                $id= $_GET["id"];
                $query_for_out_telco = "SELECT * FROM out_telco";
                $result_for_out_telco = mysql_query($query_for_out_telco);
                echo "Out Telco:";
                echo'<select name="out_telco">';
                echo '<option>Please Select</option>';
                while($row = mysql_fetch_array( $result_for_out_telco ))
                {
                    echo '<option value="'.$row['telco_name'].'">' . $row['telco_name'] . '</option>';
                }
                echo '</select>';

                $query_for_mapuser = "SELECT * FROM map_user";
                $result_for_map_user = mysql_query($query_for_mapuser);
                echo "<br>";
                echo "Map User:";
                echo'<select name="map_user">';
                echo '<option>Please Select</option>';
                while($row = mysql_fetch_array( $result_for_map_user ))
                {
                    echo '<option value="'.$row['map_user'].'">' . $row['map_user'] . '</option>';
                }
                echo '</select>';
                if(isset($_POST["submit"]))
                {
                    $out_telco = $_POST["out_telco"];
                    $map_user = $_POST["map_user"];
                    $query_to_select = mysql_query("select * from tbl_routing_table where ID = '$id'");
                    $row_to_select = mysql_fetch_array($query_to_select);
                    if($_POST["out_telco"]!= "Please Select" && $_POST["map_user"]!= "Please Select")
                    {
                        $query_to_update = mysql_query("update tbl_routing_table set OUT_TELCO='$out_telco', MAPUSR='$map_user' where ID='$id'");
                        if($query_to_update)
                        {
                            echo " <br> For Stakeholder:".$row_to_select["REQUEST_FROM"].", Out Telco updated to:".$out_telco. " and Map User updated to:".$map_user;
                        }
                    }
                    elseif($_POST["out_telco"]!= "Please Select" && $_POST["map_user"]== "Please Select")
                    {
                        $query_to_update = mysql_query("update tbl_routing_table set OUT_TELCO='$out_telco' where ID='$id'");
                        if($query_to_update)
                        {
                            echo " <br> For Stakeholder:".$row_to_select["REQUEST_FROM"]." Out Telco updated to:".$out_telco;
                        }
                    }
                    elseif($_POST["out_telco"]== "Please Select" && $_POST["map_user"] != "Please Select")
                    {
                        $query_to_update = mysql_query("update tbl_routing_table set MAPUSR='$map_user' where ID='$id'");
                        if($query_to_update)
                        {
                            echo " <br> For Stakeholder:".$row_to_select["REQUEST_FROM"]." Map User updated to:".$map_user;
                        }
                    }
                    else
                    {
                        echo "<br> No Update Done";
                    }
                }
                ?>
            <?php
            }
            ?>
            <br>
            <input type="submit" name="submit" value="Update" />
        </form>

        <a href="../profile.php"><input name="back_to_profile_page" type="button" value=" Go Back To Profile "/></a>
    </div>
<?php
include_once("../footer.php");
?>