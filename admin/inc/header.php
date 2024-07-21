<?php
session_start();
require_once("config.php");  //so that we dont need to incluide this again n again


if(($_SESSION['key']!= 'AdminKey')){
    echo "<script> location.assign('logout.php');</script>";
    die;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adminpannel</title>
</head>
<body>
    
</body>
</html>