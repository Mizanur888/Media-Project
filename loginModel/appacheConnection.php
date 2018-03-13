<?php

    $dbServerName = 'Localhost';
    $dbUserName = 'root';
    $dbPasword = '1234';
    $dbName = 'userLoginData';

    $connection = mysqli_connect($dbServerName, $dbUserName, $dbPasword, $dbName);

    if($connection->connect_error){

        echo 'mysqli connection, not connected with server';

    }


 ?>
