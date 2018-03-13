<?php
  include_once 'appacheConnection.php';

   $sqlDb = "CREATE DATABASE userLoginData";
   if (mysqli_query($connection, $sqlDb)) {
       echo "Database created successfully";
   }
   else {
      echo "Error creating database: " . $connection->error;
  }

    $sqlTb = "CREATE Table userLoginData.user (
        id int(50) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        first nvarchar(100) not null,
        last nvarchar(100) not null,
        email nvarchar(100) not null,
        uid nvarchar(100) not null,
        password nvarchar(100)not null,
        confromPassword nvarchar(100) not null

    )";

    if(mysqli_query($connection,$sqlTb )){

      echo 'Table Created successfully';
    }
    else {
       echo "Error creating database: " . $connection->error;
   }
 ?>
