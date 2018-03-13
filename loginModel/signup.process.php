<?php
  include_once 'appacheConnection.php';
  include_once 'createTable.php';
    $first = mysqli_real_escape_string($connection,$_POST['first']);
    $last = mysqli_real_escape_string ($connection, $_POST['last']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $uid = mysqli_real_escape_string($connection, $_POST['uid']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $confromPassword = mysqli_real_escape_string($connection, $_POPST['confromPassword']);

    if(isset($_POST['submit'])){

          if(validation){

            $sql = "SELECT * FROM users WHERE uid = '$uid'";
            $result = mysqli_query($connection, $sql);
            $resultcheck = mysqli_num_rows($result);
            if($resultcheck>0){
              echo 'Already Exist account name'.$uid.'choose another name to open a account';
            }
            else{
                  if($password == $confromPassword){
                    $hashpswd = password_hash($password, PASSWORD_DEFAULT);
                    $sql = "INSERT INTO 'users' ('first','last','email','uid','password')
                            values('$first', '$last', '$email', '$uid', '$hashpswd');";
                    mysqli_query($connection, $sql);
                    exit();
                  }
                  else{

                    echo $password.'Password does not matchw with'.$confromPassword.'please reEnter Password again';
                  }

            }
          }
    }


  functioin validation(){

      if(empty($first) || empty($last) || empty($email) || empty($uid) || empty($password) || empty($confromPassword)){

            //write Error message here for user to see
            //check for name validation
            if(!preg_match("/^[a-zA-Z]*$/", $first)||!preg_match("/^[a-zA-Z]*$/", $last)){
                  //TODO - show error message to user
             }
             //check for email validation
            else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
              //TODO-Generate Error message
            }
        }
      else {
              //TODO-Generate Error Message for user
       }
  }
?>
