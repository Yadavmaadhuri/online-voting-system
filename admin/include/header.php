 <?php 
 session_start();
 required_once("config.php");
  
 if($_SESSION['key'] != 'Adminkey'){
    echo"<script> location.assign('logout.php'); </script>";
    die;
 }
 ?>

 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin panel</title>
</head>
<body>
    
</body>
</html>