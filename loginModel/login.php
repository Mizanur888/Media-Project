
<?php
    SESSION_START();

    include_once 'createTable.php';

    if(isset($_POST['submit'])){

        include_once 'appacheConnection.php';
        $uid = mysqli_real_escape_string($connection,$_POST['uid']);
        $pwd = mysqli_real_escape_string($connection,$_POST['pwd']);

        if(empty($uid) || empty($pwd)){

          echo 'To login please enter user name and password';
        }
        else{
              $sql = "SELECT * FROM `user` WHERE uid = '$uid' or email = '$uid'";
              $result = mysqli_query($connection, $sql);
              $resultcheck = mysqli_num_rows($result);
              if($resultcheck<1){
                echo 'Login Error Please Enter valied User name and password';
              }
            else{
                if($row = mysqli_fetch_assoc($result)){

                  $pwdCheck = password_verify($pwd,$row['password']);
                  if($pwdCheck==false){
                      echo '<h1>user password is not valied'.'Please Enter valied Password</h1>';

                  }
                  else if($pwdCheck==true){
                    $_SESSION['u_id'] = $row['id'];
                    $_SESSION['u_first'] = $row['first'];
                    $_SESSION['u_last'] = $row['last'];
                    $_SESSION['u_email'] = $row['email'];
                    $_SESSION['u_uid'] = $row['uid'];

                    echo 'Login Succesfull.....'.$_SESSION['u_uid'];
                    header("Location:loginModel.php?login = successfull");
                  }
                }
            }
            $connection->close();
        }

    }
?>
