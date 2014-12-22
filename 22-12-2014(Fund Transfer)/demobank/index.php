<?php
include ('login.php');
?>
<!DOCTYPE html>
    <html>
<head>
    <title>Demo Bank Login Form</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main">
    <h1>Demo Bank Login Form</h1>
    <div id="login">
        <h2>Login</h2>
        <form action="" method="POST">
            <label>User Name :</label>
            <input id="name" name="username" placeholder="username" type="text">
            <label>Password :</label>
            <input id="password" name="password" placeholder="password" type="password">
            <input name="submit" type="submit" value=" Login ">
            <span><?php echo $error; ?></span>
        </form>
    </div>
</div>
</body>
    </html>