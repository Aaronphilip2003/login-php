<?php
session_start();
include("connection.php");
include("functions.php");
$user_data=check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Website</title>
</head>
<body>
    <a href="logout.php">LOGOUT</a>
    <h1>This is the Index page </h1>
    <br>
    Hello, Username.
</body>
</html>