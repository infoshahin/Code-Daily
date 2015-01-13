<?php
    include_once("functions.php");
    include_once("header.php");
?>
    <div id="login">
        <title>Login | App Monitoring Panel</title>
        <h2>Login</h2>
        <form action="" method="POST">
<!--            <label>User Name :</label>-->
            <input class="form-control" id="name" name="username" placeholder="Username" type="text">
<!--            <label>Password :</label>-->
            <input id="password" name="password" placeholder="Password" type="password">
            <input class="btn btn-default" name="log_submit" type="submit" value=" Login ">
            <span><?php echo $error; ?></span>
        </form>
    </div>
<?php
include_once("footer.php");
?>

