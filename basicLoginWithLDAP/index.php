<?php
session_start();

if($_SESSION['loggedIn'] != true) {
    header("location: ./login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    echo "<a href=\"./logout.php\">". $_SESSION['username']." logout</a> or <a href=\"./other.php\">other</a>";

    ?>
</body>
</html>