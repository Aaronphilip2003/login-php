<?php
session_start();
require("connection.php");
require("functions.php");
$user_data = check_login($con);

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
    Hello, <?php echo $user_data['user_name']; ?>
</body>

</html>