<?php
include('session.php');
include_once("header.php");
?>
<title>User Profile: <?php echo $login_session_user?></title>
<div id="user_profile">
    <b id="welcome">Welcome: <i><?php echo $login_session_user; ?></i></b>
    <b id="logout"><a href="logout.php">Log Out</a></b>
    <!--<b><input name="logout" type="button" value="Log Out"></b>-->
</div>
<div class="tab">
    <ul class="nav nav-tabs">
        <li class="nav_active"><a href="#gp" data-toggle="tab">GP</a></li>
        <li class="nav"><a href="#bl" data-toggle="tab">Banglalink</a></li>
        <li class="nav"><a href="#aktel" data-toggle="tab">Robi</a></li>
        <li class="nav"><a href="#citycell" data-toggle="tab">Citycell</a></li>
        <li class="nav"><a href="#warid" data-toggle="tab">Airtel</a></li>
        <li class="nav"><a href="#tt" data-toggle="tab">Teletalk</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">

        <div class="tab-pane fade in active" id="gp">
            <form action="gp_details/gp_list.php" method="POST">
                <div id="gp_portion">
                    <p><input name="search_gp_masking" type="text" id="search_gp_masking" placeholder="Masking" </p>
                    <input name="search_gp" type="submit" id="search_gp" value="Search For Grameen">
                    </div>
                </form>
            </div>
        <div class="tab-pane fade" id="bl">
            <form action="bl_details/bl_list.php" method="POST">
                <div id="bl_portion">
                    <p><input name="search_bl_masking" type="text" id="search_bl_masking" placeholder="Masking"</p>
                    <input name="search_bl" type="submit" id="search_bl" value="Search For Banglalink">
                </div>
            </form>
        </div>
        <div class="tab-pane fade" id="aktel">
            <form action="aktel_details/aktel_list.php" method="POST">
                <div id="aktel_portion">
                    <p><input name="search_aktel_masking" type="text" id="search_aktel_masking" placeholder="Masking"</p>
                    <input name="search_aktel" type="submit" id="search_aktel" value="Search For Robi">
                </div>
            </form>
        </div>
        <div class="tab-pane fade" id="citycell">
            <form action="citycell_details/citycell_list.php" method="POST">
                <div id="citycell_portion">
                    <p><input name="search_citycell_masking" type="text" id="search_citycell_masking" placeholder="Masking"</p>
                    <input name="search_citycell" type="submit" id="search_citycell" value="Search For Citycell">
                </div>
            </form>
        </div>
        <div class="tab-pane fade" id="warid">
            <form action="warid_details/warid_list.php" method="POST">
                <div id="warid_portion">
                    <p><input name="search_warid_masking" type="text" id="search_warid_masking" placeholder="Masking"</p>
                    <input name="search_warid" type="submit" id="search_warid" value="Search For Airtel">
                </div>
            </form>
        </div>
        <div class="tab-pane fade" id="tt">
            <form action="tt_details/tt_list.php" method="POST">
                <div id="tt_portion">
                    <p><input name="search_tt_masking" type="text" id="search_tt_masking" placeholder="Masking"</p>
                    <input name="search_tt" type="submit" id="search_tt" value="Search For Teletalk">
                </div>
            </form>
        </div>
        </div>
    </div>
    <a href="report.php"><input name="show_report" type="button" value="Show Report"/></a>
<?php
include_once("footer.php");
?>