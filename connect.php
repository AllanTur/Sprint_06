<?php

    // MYSQLI
    $con = new mysqli('localhost', 'root', '', 'vapfactory');

    if (!$con){
        die(mysqli_error($con));
    }

    // PDO

    
    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    
    // try {
    //   $conn = new PDO("mysql:host=$servername;dbname=vapfactory", $username, $password);
    //   // set the PDO error mode to exception
    //   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //   echo "Connected successfully";
    // } catch(PDOException $e) {
    //   echo "Connection failed: " . $e->getMessage();
    // }
    

?>