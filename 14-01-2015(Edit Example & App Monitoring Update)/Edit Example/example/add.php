<html>
<body>
<?php
include('config.php');
if(isset($_POST['submit']))
{
    $name=mysql_real_escape_string($_POST['name']);
    $age=mysql_real_escape_string($_POST['age']);
    $query1=mysql_query("insert into addd values('','$name','$age')");
    echo "insert into addd values('','$name','$age')";
    if($query1)
    {
        header("location:list.php");
    }
}
?>
<fieldset style="width:300px;">
    <form method="post" action="">
        Name: <input type="text" name="name"><br>
        Age: <input type="text" name="age"><br>
        <br>
        <input type="submit" name="submit" value="Enter">
    </form>
</fieldset>
</body>
</html>