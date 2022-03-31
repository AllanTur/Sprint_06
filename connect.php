<?php

    //MYSQLI
    $con = new mysqli("109.234.164.161", $_SERVER['DB_USER'], $_SERVER['DB_PASSWORD'], 'sc1lgvu9627_turpin-allan.sprint-06');

    if (!$con){
        die(mysqli_error($con));
    }

?>