<?php
    include_once("header.php");
    include_once("functions.php");
?>

<title>Demo Bank Login Form</title>
    <div id="login">
        <h2>Login</h2>
        <form action="" method="POST">
            <label>User Name :</label>
            <input class="form-control" id="name" name="username" placeholder="username" type="text">
            <label>Password :</label>
            <input id="password" name="password" placeholder="password" type="password">
            <input class="btn btn-default" name="log_submit" type="submit" value=" Login ">
            <span><?php echo $error; ?></span>
        </form>
    </div>
<?php
    include_once("footer.php");
?>