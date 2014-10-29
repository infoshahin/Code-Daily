<?php
include("connection.php");
//
//if(isset($_POST["r_sub"])){
//    $msisdn = $_POST["msisdn"];
//    $in_sms = $_POST["in_sms"];
//    $incomming_time = $_POST["incomming_time"];
//    $shortcode = $_POST["shortcode"];
//    $service_id = $_POST["service_id"];
//    $sms_status = $_POST["sms_status"];
//    $process_time = $_POST["process_time"];
//    $remarks = $_POST["remarks"];
//
//    $in_query = "INSERT INTO inbox (msisdn, in_sms, incomming_time, shortcode, service_id, sms_status, process_time, remarks) VALUES ('$msisdn','$in_sms','$incomming_time','$shortcode','$service_id','$sms_status','$process_time','$remarks')";
//    if(mysql_query($in_query, $dbcon)){
//        echo "Data Inserted";
//    }
//    else {
//        echo "Data Insertion Fail".mysql_error();
//    }
//}
//
//
//
//$chk_query= "INSERT INTO subs_inbox_archive SELECT * FROM subs_inbox WHERE sms_status=1";
//
////while($row = mysql_fetch_array($chk_query)){
////    echo $row['id']."<br/>";
////}
//if(mysql_query($chk_query)){
//    echo "Success: Copied to archive";
//    $curr_time = date("Y-m-d H:i:s");
//
//    $temp = "CREATE TABLE IF NOT EXISTS temp (id INT NOT NULL AUTO_INCREMENT, count INT, log_time DATE,row_id INT,PRIMARY KEY(id))";
//    if(mysql_query($temp)){
//        echo "<br/><br/>Table Created <br/><br/>";
//    }
//    else{
//        echo "<br/><br/>Failed: ".mysql_error()."<br/><br/>";
//    }
//
//    $del_query = "DELETE FROM subs_inbox WHERE sms_status=1";
//    if(mysql_query($del_query)){
//        echo "Deleted From inbox";
//    }
//    else{
//        echo "Error: ".mysql_error();
//    }
//    $count = mysql_affected_rows();
//    $insert_temp = "INSERT INTO temp (`count`,`log_time`,`row_id`) VALUES ('".$count."','".$curr_time."','NULL')";
//    if(mysql_query($insert_temp)){
//        echo "<br/><br/>Log Created @ Temp Table<br/><br/>";
//    }
//    else {
//        echo "<br/><br/>Error: ".mysql_error()."<br/><br/>";
//    }
//}
//else {
//    echo "<br/><br/>Error: ".mysql_error()."<br/><br/>";
//}


/* robi_update("inbox_queue","inbox_archive", true);*/

/*robi_update("outbox_queue","outbox_archive", false);*/

/*robi_update("subs_inbox","subs_inbox_archive", false);*/

robi_update("subs_outbox","subs_outbox_archive", false);
function robi_update($tb_name,$out_tb, $text){
    $rowid = array();
    $rowid2 = array();
    $curr_time = date("Y-m-d");
    $sql = "SELECT * FROM ".$tb_name." WHERE sms_status='SUCCESS' && DATE(incomming_time)<'".$curr_time."'";
    $sql2 = "SELECT * FROM ".$tb_name." WHERE sms_status != 'SUCCESS' && DATE(incomming_time)='".$curr_time."'";
    if($run = mysql_query($sql)){
        while($r=mysql_fetch_array($run)){
            array_push($rowid,$r['id']);
        }
        echo var_dump($rowid);
        for($i=0; $i<count($rowid); $i++){
            $usql = "UPDATE ".$tb_name." SET isRead=1 WHERE id=".$rowid[$i]."";
            if(mysql_query($usql)){
                echo "<br/>Updated<br/>";
            }
            else {
                echo "<br/>Failed".mysql_error()."<br/>";
            }
        }
        if(!empty($rowid)){
            $updateData = "INSERT INTO ".$out_tb." SELECT * FROM ".$tb_name." WHERE isRead=1 && DATE(incomming_time)<'".$curr_time."'";
            $delData = "DELETE FROM ".$tb_name." WHERE isRead=1 && DATE(incomming_time)<'".$curr_time."'";
            if(mysql_query($updateData)&& mysql_query($delData)){
                echo "<br/>Updated And Deleted<br/>";
            }
            else{
                echo "<br/>Error: ".mysql_error()."<br/>";
            }
        }
    }
    if($text == true){
    if($run2 = mysql_query($sql2) or die(mysql_error())){

        while($r2=mysql_fetch_array($run2)){
            array_push($rowid2,$r2['id']);
        }
        echo var_dump($rowid2);
        for($j=0; $j<count($rowid2); $j++){
            $usql2 = "UPDATE ".$tb_name." SET sms_status='processing' WHERE id=".$rowid2[$j]."";
            if(mysql_query($usql2)){
                echo "<br/>Updated<br/>";
            }
            else {
                echo "<br/>Failed".mysql_error()."<br/>";
            }
        }
    }
    }
}










?>


<!--
/*<html>
    <head>
        <title>Robi SMS Notification</title>
    </head>

    <body>
    <form action="#" method="post">
        <label for="msisdn">MSISDN</label>
        <input type="text" name="msisdn"/><br/>
        <label for="in_sms">in_sms</label>
        <input type="text" name="in_sms"/><br/>
        <label for="incoming_time">Incoming Time</label>
        <input type="text" name="incomming_time"/><br/>
        <label for="shortcode">shortcode</label>
        <input type="text" name="shortcode"/><br/>
        <label for="service_id">Service ID</label>
        <input type="text" name="service_id"/><br/>
        <label for="sms_status">SMS Status</label>
        <input type="text" name="sms_status"/><br/>
        <label for="process_time">Process Time</label>
        <input type="text" name="process_time"/><br/>
        <label for="remarks">Remarks</label>
        <input type="text" name="remarks"/><br/>
        <input type="submit" name="r_sub"/><br/>
    </form>
    </body>
</html>
-->
