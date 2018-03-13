<?php
  include_once 'appacheConnection.php';
  //include_once 'createTable.php';


    if(isset($_POST['submit'])){
          $first = mysqli_real_escape_string($connection,$_POST['first']);
          $last = mysqli_real_escape_string ($connection, $_POST['last']);
          $email = mysqli_real_escape_string($connection,$_POST['email']);
          $uid = mysqli_real_escape_string($connection, $_POST['uid']);
          $password = mysqli_real_escape_string($connection, $_POST['password']);
          $confromPassword = mysqli_real_escape_string($connection, $_POST['confromPassword']);

          if(empty($first) || empty($last) || empty($email) || empty($uid) || empty($password)){

			         exit();
		        }
            else  if(!preg_match("/^[a-zA-Z]*$/", $first)||!preg_match("/^[a-zA-Z]*$/", $last)){
			         exit();
            }
				            //check if emsil is valied
				   else  if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
					     exit();
				    }

         else{
            $sql = "SELECT * FROM user WHERE uid = '$uid'";
            $result = mysqli_query($connection, $sql);
            $resultcheck = mysqli_num_rows($result);
            if($resultcheck>0){
              echo 'Already Exist account name'.$uid.'choose another name to open a account';
            }

            else{
                  if($password == $confromPassword){
                    $hashpswd = password_hash($password, PASSWORD_DEFAULT);
                    $sql = "INSERT INTO `user`(`first`, `last`, `email`, `uid`, `password`, `confromPassword`) VALUES ('$first','$last','$email','$uid','$hashpswd','$hashpswd')";
                    mysqli_query($connection, $sql);
                    header("Localhost:loginModel.php);
                    exit();
                  }
                  else{

                    echo $password.'Password does not matchw with'.$confromPassword.'please reEnter Password again';
                  }

            }

          $connection->close();
        }
      }


  /*functioin validation(){

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
  }*/
?>
