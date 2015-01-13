<?php
include('session.php');
include_once("header.php");
?>
<title>User Profile: <?php echo $username?></title>
    <div id="user_profile">
        <b id="welcome">Welcome: <i><?php echo $username; ?></i></b>
        <b id="logout"><a href="logout.php">Log Out</a></b>
        <!--<b><input name="logout" type="button" value="Log Out"></b>-->
    </div>
<div class="tab">
    <ul class="nav nav-tabs">
        <li class="nav_active"><a href="#monitoring_panel" data-toggle="tab">Monitoring Panel</a></li>
        <li class="nav"><a href="#application_entry" data-toggle="tab">Application Entry</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">

        <div class="tab-pane fade in active" id="monitoring_panel">
            <form action="" method="">
            <div id="monitoring_panel_portion">
                <h2>Panel</h2>
            </div>
            </form>
        </div>

        <div class="tab-pane fade" id="application_entry">
            <form action="" method="">
<div id="application_entry_portion">
    <h2>Application Entry</h2>

    </div>
</form>
        </div>
    </div>
</div>
<?php
    include_once("footer.php");
?>