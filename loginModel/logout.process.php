<?php

  if(isset($_POST['submit'])){
    SESSION_START();
    SESSION_UNSET();
    SESSION_DESTROY();
    header("Location:login.php");
    Exit();
  }


 ?>
