
<?php
$arrayOfStrings = array('blue','red','green','yellow');

function indexGetter($array, $searchString)
{
    $key = array_search($searchString, $array);
    echo $key;
}

indexGetter($arrayOfStrings,"green")
?>

