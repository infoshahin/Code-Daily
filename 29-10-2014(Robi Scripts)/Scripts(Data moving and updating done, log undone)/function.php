<?php
function move_table_data($tb_name,$out_tb, $text){
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