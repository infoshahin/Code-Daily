<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Premium Series
Description: A three-column, fixed-width blog design.
Version    : 1.0
Released   : 20090303

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>SSL Wireless Gateway Admin</title>
    <meta name="keywords" content="" />
    <meta name="Premium Series" content="" />
    <link href="default.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<!-- start header -->
<div id="header">
    <div id="logo">
        <h1><a href="http://localhost:8080/gatewayadmin/operations.php"><span>Gateway</span>Admin</a></h1>

    </div>
    <div id="menu">
        <ul id="main">
            <li><a href="http://localhost:8080/gatewayadmin/operations.php">Search Masking</a></li>
            <li class="current_page_item"><a href="http://localhost:8080/gatewayadmin/profile.php">Report</a></li>
            <li><a href="#"></a></li><li><a href="#"></a></li>
            <li><a href="#"></a></li><li><a href="#"></a></li>
            <li><a href="#"></a></li><li><a href="#"></a></li>
            <li><a href="#"></a></li><li><a href="#"></a></li>
            <li><a href="#"></a></li><li><a href="#"></a></li>
            <li><a href="http://localhost:8080/gatewayadmin/logout.php">Logout</a></li>
        </ul>
    </div>

</div>
<!-- end header -->
<div id="wrapper">
    <!-- start page -->
    <div id="page">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <?php
    $sql_for_update_out_telco = "UPDATE tbl_routing_table SET OUT_TELCO = CASE IN_TELCO";
    $message_for_update_out_telco = "You want to change the OUT TELCO of";
    if($_POST['request_from'])
    {
        $request_from = $_POST['request_from'];
    }

    if(isset($_REQUEST['update_out_telcoGRAMEEN']))
    {
        $in_telco_grameen=$_REQUEST['update_out_telcoGRAMEEN'];
    }
    if(isset($_REQUEST['update_out_telcoBANGLALINK']))
    {
        $in_telco_banglalink=$_REQUEST['update_out_telcoBANGLALINK'];
    }
    if(isset($_REQUEST['update_out_telcoAKTEL']))
    {
        $in_telco_aktel=$_REQUEST['update_out_telcoAKTEL'];
    }
    if(isset($_REQUEST['update_out_telcoAIRTEL']))
    {
        $in_telco_warid=$_REQUEST['update_out_telcoAIRTEL'];
    }
    if(isset($_REQUEST['update_out_telcoCITYCELL']))
    {
        $in_telco_citycell=$_REQUEST['update_out_telcoCITYCELL'];
    }
    if(isset($_REQUEST['update_out_telcoTELETALK']))
    {
        $in_telco_teletalk=$_REQUEST['update_out_telcoTELETALK'];
    }
    if(isset($_REQUEST['update_map_userGRAMEEN']))
    {
        $map_user_grameen=$_REQUEST['update_map_userGRAMEEN'];
    }
    if(isset($_REQUEST['update_map_userBANGLALINK']))
    {
        $map_user_banglalink=$_REQUEST['update_map_userBANGLALINK'];
    }
    if(isset($_REQUEST['update_map_userAKTEL']))
    {
        $map_user_aktel=$_REQUEST['update_map_userAKTEL'];
    }
    if(isset($_REQUEST['update_map_userAIRTEL']))
    {
        $map_user_warid=$_REQUEST['update_map_userAIRTEL'];
    }
    if(isset($_REQUEST['update_map_userCITYCELL']))
    {
        $map_user_citycell=$_REQUEST['update_map_userCITYCELL'];
    }
    if(isset($_REQUEST['update_map_userTELETALK']))
    {
        $map_user_teletalk=$_REQUEST['update_map_userTELETALK'];
    }
    print_r($_REQUEST);

    if(!empty($in_telco_grameen))
    {
        $sql_for_update_out_telco .= " WHEN 'GRAMEEN' THEN '$in_telco_grameen'";
        $message_for_update_out_telco .= " GRAMEEN to $in_telco_grameen,";
    }

    if(!empty($in_telco_banglalink))
    {
        $sql_for_update_out_telco .= " WHEN 'BANGLALINK' THEN '$in_telco_banglalink'";
        $message_for_update_out_telco .= " BANGLALINK to $in_telco_banglalink,";
    }
    if(!empty($in_telco_aktel))
    {
        $sql_for_update_out_telco .= " WHEN 'AKTEL' THEN '$in_telco_aktel'";
        $message_for_update_out_telco .= " AKTEL to $in_telco_aktel,";
    }
    if(!empty($in_telco_warid))
    {
        $sql_for_update_out_telco .= " WHEN 'AIRTEL' THEN '$in_telco_warid'";
        $message_for_update_out_telco .= " AIRTEL to $in_telco_warid,";
    }
    if(!empty($in_telco_citycell))
    {
        $sql_for_update_out_telco .= " WHEN 'CITYCELL' THEN '$in_telco_citycell'";
        $message_for_update_out_telco .= " CITYCELL to $in_telco_citycell,";
    }
    if(!empty($in_telco_teletalk))
    {
        $sql_for_update_out_telco .= " WHEN 'TELETALK' THEN '$in_telco_teletalk'";
        $message_for_update_out_telco .= " TELETALK to $in_telco_teletalk.";
    }
    $sql_for_update_out_telco .= " ELSE OUT_TELCO END WHERE REQUEST_FROM IN('BRACBANK')";
    $message_for_update_out_telco .= " Are you sure?";
    echo $message_for_update_out_telco;
    echo $sql_for_update_out_telco;

    if(isset($_POST["data_update"]))
    {
        if(mysql_query($sql_for_update_out_telco))
        {
            echo $sql_for_update_out_telco or mysql_error();
            echo "Successfully Updated";
        }
        else
        {
            echo "Not done";
        }

    }
    if(isset($_POST['cancel_update']))
    {
        echo "Update Cancelled";
    }
    ?>
        <input name="data_update" type="submit" value=" Update "/></a>
        <input name="cancel_update" type="submit" value=" Cancel "/></a>
    </form>
    </div>
    <!-- end page -->
</div>
<div id="footer">
    <p class="copyright">&copy;&nbsp;&nbsp;<?php echo Date("Y"); ?> All Rights Reserved &nbsp;&bull;&nbsp; Design by <a href="http://www.sslwireless.com/">SSLWireless</a>.</p>
    <p class="link"><a href="http://www.sslwireless.com/">Privacy Policy</a>&nbsp;&#8226;&nbsp;<a href="http://www.sslwireless.com/">Terms of Use</a></p>
</div>
</body>
</html>
