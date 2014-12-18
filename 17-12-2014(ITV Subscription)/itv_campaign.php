<script type="text/javascript">
    function count_alpha(val){
        var length = val.length;
        /*	alert(length);
         */
        var k = document.getElementById("kkk").value;
        var l = k.length;
        var diff = 160-length-l;
        document.getElementById("count_alert").innerHTML = diff+" characters left.";

        /*	document.getElementById("count_alert").innerHTML = length+" characters.";
         */
    }
</script>
<?php

include('excel_read/Excel/reader.php');

error_reporting(0);
define ("MAX_SIZE","1000000");

//This function reads the extension of the file. It is used to determine if the file  is an exfile by checking the extension.
function getExtension($str)
{
    $i = strrpos($str,".");
    if (!$i) { return ""; }
    $l = strlen($str) - $i;
    $ext = substr($str,$i+1,$l);
    return $ext;
}
$flag1=2;
$errors=0;
$error_type = "!";
$newname = '';


if(isset($_POST['campaign']))
{
//print_r($_POST);
    $send=$_POST['sms'];

    $exfile=$_FILES['exfile']['name'];


    if ($exfile)
    {
        //get the original name of the file from the clients machine
        $filename = stripslashes($_FILES['exfile']['name']);
        //get the extension of the file in a lower case format
        $extension = getExtension($filename);
        $extension = strtolower($extension);


        if (($extension != ("xls" || "xlsx")))
        {
            //print error message
            $err = '<h3>Unknown extension! File not uploaded.</h3>';
            $errors=1;
        }
        $size=filesize($_FILES['exfile']['tmp_name']);

        //compare the size with the maxim size we defined and print error if bigger
        if ($size > MAX_SIZE*8000)
        {
            $err = '<h3>You have exceeded the size limit! File not uploaded.</h3>';
            $errors=1;
        }

        if($errors==1){
            echo $err;
        }
        else
        {


            //$exfile_name="schedule".'.'.$extension;

            //$newname="files/".$exfile_name;
            date_default_timezone_set('Asia/Dhaka');

            if($extension == "xls")
                $newname="excel_read/ssl_campiagn/".date("Y-m-d-His").".xls";
            if($extension == "xlsx")
                $newname="excel_read/ssl_campiagn/".date("Y-m-d-His").".xlsx";
            if($errors!=1){

                $copied = move_uploaded_file($_FILES['exfile']['tmp_name'], $newname);
            }
            if (!$copied)
            {

                $errors=1;
                $error_type = ".";
            }
            else
            {
                if($errors!=1){
                    $str11=1;
                    echo "<h3>Congratulations!! You have successfully submitted the list.</h3>";
                }
                else
                {
                    $flag1=1;
                    echo '<h1>Error in submitting. Your file was not saved! Please try to upload again!<h1>';
                }

            }
        }
    }

//after uploading
    if($copied){
//reading the excel file

// ExcelFile($filename, $encoding);
        $data = new Spreadsheet_Excel_Reader();

// Set output Encoding.
        $data->setOutputEncoding('CP1251');


        $data->read($newname);


        error_reporting(E_ALL ^ E_NOTICE);
        $data_to_show = array();

        $k = 0;

        for ($i = 1; $i <= $data->sheets[0]['numRows']; $i++) {

            $val=0;
            for ($j = 1; $j <= $data->sheets[0]['numCols']; $j++) {

                if($i>=0){
                    if($j<=5){
                        $str= $data->sheets[0]['cells'][$i][$j];

                        $strarr[$j]=$str;
                        $data_to_show[$k][$j] = $str; //reads cells of a row
                    }

                    $val=1;
                }
            }
            $k = $k + 1;
            //end of the row

            if($val==1){


                $email= strtolower ($strarr[1]);
                $strtmp=" ".$struc;
                $startstring=0;
                $fpos=strpos($strtmp,"{");
                $strout="";
                while($fpos != FALSE)
                {
                    $strout.=substr($strtmp,$startstring,$fpos-$startstring);
                    $lpos=strpos($strtmp,"}");
                    $pos=substr($strtmp,$fpos+1,$lpos-$fpos-1);
                    //echo $arr[$i][$pos];
                    $strout.=$strarr[$pos];
                    //echo $strarr[3];
                    //$startstring=$lpos+1;
                    //substr($strtmp,$fpos+1,$lpos-$fpos-1);
                    $strtmp=substr($strtmp,$lpos+1);
                    $fpos=strpos($strtmp,"{");
                }

                if($fpos==FALSE)
                {
                    $fpos=strlen($strtmp);
                }
                $strout.=substr($strtmp,$startstring,$fpos-$startstring);
                //$strout = explode(" ",$strout)
                $strout = substr($strout, 1);
                //echo strlen($strout);
                if (strlen($strout) > 1 && $strout != 'NULL') {

                    //echo strlen($strout)."<br />";
                    if (strlen($strout) > 160) {
                        echo ' <div style = "background-color:#FF0000"> <b> ';
                        echo $strout;
                        echo "</b>" . "<br />";

                        echo "<br/> </div>";
                    }

                    else
                    {

                        echo ' <div style = "background-color:#FFFFFF"> <b> ';
                        echo $strout;
                        echo "</b>" . "<br />";

                        echo "<br/> </div>";

                    }
                }

                //	}

            }




        }

    }
// data to show
    for($i=0; $i<$k; $i++){
        $msisdn = $data_to_show[$i][1];

        $phn_len = strlen($msisdn);

        if($phn_len<11 || $msisdn=='')
            $error_phn = true;
        else
            $error_phn = false;
        $op = substr($msisdn,0,5);
        $n = substr($msisdn,4, 1);
        /*$str = "select * from ser_telco where telco_prefix='$n'";
        $sql = mysql_query($str);
        $data = mysql_fetch_array($sql);
        $operator_name=$data['telco_name'];
        $r_sql = mysql_query("select * from ser_route as r inner join
        (SELECT * FROM ser_operator WHERE operator_name='$operator_name') as o
        on r.operator_id=o.operator_id where client_id='$cl_id'");
        $r_data = mysql_fetch_array($r_sql);
        $route_id = $r_data['route_id'];*/
        $str = "select * from ser_telco where telco_prefix='$n'";
        $sql = mysql_query($str);
        $data = mysql_fetch_array($sql);
        $operator_name=$data['telco_name'];
        $r_sql = mysql_query("select * from ser_route as r inner join
	(SELECT * FROM ser_operator WHERE operator_name='$operator_name') as o
	on r.operator_id=o.operator_id where client_id=1");
        $r_data = mysql_fetch_array($r_sql);
        $route_id = $r_data['route_id'];
//echo "outttttttttt";

        if(!($error_phn) && $op!='88019' && $op!='88018' && $op!='88011')
        {

//echo "innnnnnnnnnn";
            $in_str = "INSERT INTO cl_outbox_sslcampaign (subscriber_id,msisdn, content, route_id,charge, client_id,keyword) VALUES ('987654321','$msisdn', '$send','$route_id',0,1,'itv_campaign')";
            mysql_query($in_str) or die(mysql_error());


        }


    }



}
?>



<h3><a href="#">Campaign management</a></h3><h2><a href="#">Robi Campaign</a></h2>
<form action="" method="post" id="vform"  enctype="multipart/form-data" onsubmit="return confirm('Are you sure  you want to send message')">
    <table cellpadding="5" cellspacing="5" border="0" class="formtable">
        <tr>
            <td>Upload file : </td>
            <td><input type="file" name="exfile" /></td>
        </tr>
        <tr>
            <td>Message : </td>
            <td>

                <!--   <textarea name="message" id="sms_try" class="required" maxlength="160" style="min-height:120px; width:300px; border:0; font-family:inherit; font-size:12px;" onkeyup="count_alpha(this.value);"></textarea>-->

                <div style="border:#CCCCCC 1px solid; float:left; padding:3px">
                    <input type="hidden" name="kkk" id="kkk" value="" />
                    <span style="vertical-align:top" id="show_key"></span>
                    <textarea name="sms" id="sms_try" class="required" maxlength="160" style="min-height:120px; width:300px; border:0; font-family:inherit; font-size:12px;" onkeyup="count_alpha(this.value);"></textarea>
                </div>&nbsp;&nbsp;<span id="count_alert"></span>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="campaign" value="Send" /></td>
        </tr>
    </table>
</form>
