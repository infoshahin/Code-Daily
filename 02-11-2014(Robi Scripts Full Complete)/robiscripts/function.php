<?php
function move_table_data($table_name, $out_table, $text)
{
    $rowid_table_name = array();
    $rowid_out_table = array();
    $insertCount =0;
    $deleteCount =0;
    $updateCount =0;
    date_default_timezone_set("Asia/Dhaka");
    $current_time = date("Y-m-d");
    $start_time = date("Y-m-d H:i:s");
    $end_time = date("Y-m-d H:i:s");

    $query_for_log = "CREATE TABLE IF NOT EXISTS log_table (id INT NOT NULL AUTO_INCREMENT, script_id INT, insertCount VARCHAR(100), deleteCount VARCHAR(100), updateCount VARCHAR(100), start_time DATE , end_time DATE , PRIMARY KEY (id))";
    if(mysql_query($query_for_log))
    {
        echo "<br/><br/>Log Table Created <br/><br/>";
    }
    else
    {
        echo "<br/><br/>Failed: ".mysql_error()."<br/><br/>";
    }

    $select_query_for_move_data = "SELECT * FROM ".$table_name." WHERE sms_status = 'SUCCESS' && DATE(incomming_time)<'".$current_time."'";
    $select_query_for_update_data = "SELECT * FROM ".$table_name." WHERE sms_status != 'SUCCESS' && DATE(incomming_time)='".$current_time."'";

    if($run_move_data_query = mysql_query($select_query_for_move_data))
    {
        while ($get_move_data = mysql_fetch_array($run_move_data_query))
        {
            array_push($rowid_table_name, $get_move_data['id']);
        }
        echo var_dump($rowid_table_name);

        for($i=0; $i<count($rowid_table_name); $i++)
        {
            $update_isRead_query = "UPDATE ".$table_name." SET isRead = 1 WHERE id = ".$rowid_table_name[$i]."";
            if(mysql_query($update_isRead_query))
            {
                echo "<br/>isRead Updated<br/>";
            }
            else
            {
                echo "<br/>Failed".mysql_error()."";
            }
            $updateCount += mysql_affected_rows();
        }

        if(!empty($rowid_table_name))
        {
            $insertQuery = "INSERT INTO ".$out_table." SELECT * FROM ".$table_name." WHERE isRead =1 && DATE(incomming_time)<'".$current_time."'";
            $deleteQuery = "DELETE FROM ".$table_name." WHERE isRead=1 && DATE(incomming_time)<'".$current_time."'";
            if(mysql_query($insertQuery))
            {
                echo "<br/>Data inserted to $out_table<br/>";
                $insertCount += mysql_affected_rows();
            }
            else
            {
                echo "<br/>Error: ".mysql_error()."<br/>";
            }

            if(mysql_query($deleteQuery))
            {
                echo "<br/>Data deleted from $table_name<br/>";
                $deleteCount += mysql_affected_rows();
            }
            else
            {
                echo "<br/>Error: ".mysql_error()."<br/>";
            }
        }
    }
    if($text== true)
    {
        if($run_update_data_query = mysql_query($select_query_for_update_data)or die (mysql_error()))
        {
            while($get_update_data = mysql_fetch_array($run_update_data_query))
            {
                array_push($rowid_out_table,$get_update_data['id']);
            }
            echo var_dump($rowid_out_table);

            for($j=0; $j<count($rowid_out_table);$j++)
            {
                $update_processing_query = "UPDATE ".$table_name." SET sms_status='processing' WHERE id= ".$rowid_out_table[$j]."";
                if(mysql_query($update_processing_query))
                {
                    echo "<br/> SMS Status updated to 'processing'<br/>";
                }
                else
                {
                    echo "<br/>Failed :".mysql_error()."<br/>";
                }
                $updateCount += mysql_affected_rows();
            }
        }
    }

    switch($table_name)
    {
        case "inbox_queue":
            $scriptID = 1;
            break;
        case "outbox_queue":
            $scriptID = 2;
            break;
        case "subs_inbox":
            $scriptID = 3;
            break;
        case "subs_outbox":
            $scriptID = 4;
            break;
    }

    if($insertCount != 0 || $deleteCount != 0 || $updateCount != 0)
    {
        $insert_to_log_query = "INSERT INTO log_table(`script_id`,`insertCount`,`deleteCount`,`updateCount`,`start_time`,`end_time`) VALUES ($scriptID,'$insertCount','$deleteCount','$updateCount','$start_time','$end_time')";
        if(mysql_query($insert_to_log_query))
        {
            echo "<br/><br/> Script log entered successfully <br/><br/>";
        }
        else
        {
            echo "<br/><br/>Error: ".mysql_error()."<br/><br/>";
        }
    }
}