<?php

    $dbServerName = 'Localhost';
    $dbUserName = 'root';
    $dbPasword = '';
    $dbName = '';

    $connection = mysqli_connect($dbServerName, $dbUserName, $dbPasword, $dbName);

    if($connection->connect_error){

        echo 'mysqli connection, not connected with server';

    }
 ?>
