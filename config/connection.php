<?php
require_once('createdb.php');
//connecting to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "votingsystem";

//create a connection
$conn = mysqli_connect($servername,$username,$password,$dbname);


//Check Connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

  
//creating table for cregister
$sql="CREATE TABLE IF NOT EXISTS signup(
    id INT PRIMARY KEY AUTO_INCREMENT,
    su_username VARCHAR(30) ,
    su_contact_no INT(10) ,
    su_password varchar(30),
    user_role varchar(30)
    )";

    if(mysqli_query($conn,$sql)){
       // echo "<br>";
        //echo "Table Created Successfully.";
    }else{
        echo "<br>";
        echo "Error Creating table".mysqli_error($conn);
    }
 
    //creating table for cregister
$sql="CREATE TABLE IF NOT EXISTS sadmin(
    sid INT PRIMARY KEY default 101,
    adminemail VARCHAR(30),
    adminpassword varchar(10) 
    )";

    if(mysqli_query($conn,$sql)){
       // echo "<br>";
        //echo "Table Created Successfully.";
    }else{
        echo "<br>";
        echo "Error Creating table".mysqli_error($conn);
    }

    