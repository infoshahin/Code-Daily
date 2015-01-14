<?php
include('session.php');
include_once("header.php");
$page = $_SERVER['PHP_SELF'];
$sec = "10";
?>
    <style type="text/css">
        <!--
        .style1 {
            color: #330099;
            font-weight: bold;
            font-size: xx-large;
        }
        .style2 {
            color: #333333;
            font-weight: bold;
            font-size: 24px;
        }
        .style3 {
            color: #CC0033;
            font-weight: bold;
            font-size: large;
        }
        -->
    </style>
<title>User Profile: <?php echo $username?></title>
<head>
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
</head>
    <div id="user_profile">
        <b id="welcome">Welcome: <i><?php echo $username; ?></i></b>
        <b id="logout"><a href="logout.php">Log Out</a></b>
        <!--<b><input name="logout" type="button" value="Log Out"></b>-->
    </div>
<div class="tab">
    <ul class="nav nav-tabs">
        <li class="nav_active"><a href="#application_entry" data-toggle="tab">Application Entry</a></li>
        <li class="nav"><a href="#monitoring_panel" data-toggle="tab">Monitoring Panel</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">

        <div class="tab-pane fade in active" id="application_entry">
            <form action="" method="">
            <div id="application_entry_portion">
                <h2>Application Entry</h2>
                <?php
                if(isset($_POST['submit']))
                {
                    $application_id=mysql_real_escape_string($_POST['application_id']);
                    $application_name=mysql_real_escape_string($_POST['application_name']);
                    $server_name = mysql_real_escape_string($_POST['server_name']);
                    $query_to_insert_application=mysql_query("insert into applications_entry values('$application_id','$application_name', '$server_name')");
                    echo "insert into addd values('','$name','$age')";
                    if($query1)
                    {
                        header("location:list.php");
                    }
                }
                ?>
                <fieldset style="width:300px;">
                    <form method="post" action="">
                        Application ID: <input type="text" name="application_id"><br>
                        Application Name: <input type="text" name="application_name"><br>
                        Server: <input type="text" name="server_name"><br>
                        <br>
                        <input type="submit" name="submit" value="Add Application">
                    </form>
                </fieldset>
            </div>
            </form>
        </div>

        <div class="tab-pane fade" id="monitoring_panel">
            <form action="" method="">
<div id="monitoring_panel_portion">
    <h2>Monitoring Panel</h2>

    </div>
</form>
        </div>
    </div>
</div>
<?php
    include_once("footer.php");
?>