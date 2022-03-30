<?php

    //MYSQLI
    $con = new mysqli(109.234.164.161, 'DB_USER', 'DB_PASSWORD', 'vapfactory');

    if (!$con){
        die(mysqli_error($con));
    }

        //PDO

        
    // try {
    //     // dev configuration
    //     if (strcmp($_SERVER['ENVIRONMENT_TYPE'], "development") == 0) {
    //         $mysqlClient = new PDO(
    //             'mysql:host=localhost;dbname=vapfactory;charset=utf8',
    //             'root',
    //             ''
    //         );
    //     }

        // prod configuration
//         if (strcmp($_SERVER['ENVIRONMENT_TYPE'], "production") == 0) {
//             $mysqlClient = new PDO(
//                 'mysql:host=109.234.164.161;dbname=sc1lgvu9627_rozar-fabien.sprint-06;charset=utf8',
//                 $_SERVER['DB_USER'],
//                 $_SERVER['DB_PASSWORD']
//             );
//         }
//     } catch (Exception $e) {
//         die('Erreur : ' . $e->getMessage());
// }

?>