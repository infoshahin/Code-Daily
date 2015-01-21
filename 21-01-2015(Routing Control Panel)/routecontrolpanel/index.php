<?php
    include_once("header.php");
    include_once("functions.php");
?>

<title>Route Control Panel</title>
    <h1>Route Control Panel</h1>
    <div id="login">
        <h2>Login</h2>
        <form action="" method="POST">
<!--            <label>User Name :</label>-->
            User Name: <input class="form-control" id="name" name="username" placeholder="Username" type="text">
<!--            <label>Password :</label>-->
            Password :<input id="password" name="password" placeholder="Password" type="password">
            <input class="btn btn-default" name="log_submit" type="submit" value=" Login ">
            <span><?php echo $error; ?></span>
        </form>
    </div>
<?php
    include_once("footer.php");
?>