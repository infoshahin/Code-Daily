<?php
$user_name = "root";
$password = "";
$database = "addressbook";
$server = "127.0.0.1";

$db_handle = mysql_connect($server, $user_name, $password);
$db_found = mysql_select_db($database, $db_handle);

if ($db_found) {
    $result = array();
    $SQL = "SELECT * FROM tb_address_book";
    $result = mysql_query($SQL);

    while ( $db_field = mysql_fetch_array($result) ) {

//        array_push($result,$db_field['id']);
//        echo var_dump($result);
//        echo mysql_fetch_array($result);
        print $db_field['id'] . "<BR>";
        print $db_field['first_name'] . "<BR>";
        print $db_field['surname'] . "<BR>";
        print $db_field['address'] . "<BR>";

    }

    mysql_close($db_handle);

}
else {

    print "Database NOT Found ";
    mysql_close($db_handle);

}