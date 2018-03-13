<?php

  SESSION_START();
 ?>

 <ul>
 						<li><a href = "index.php">Home</a></li>
 						<li><a href = "#">Resume</a></li>
 						<li><a href = "mail.php">contact</a></li>
 </ul>

<?php

		if(isset($_SESSION['u_uid'])){

			echo '<form action = "logout.process.php" method = "POST">
						 <button type = "submit" name = "submit"> Logout</button>
						</form>';
				}
        else
        {
          echo '<form action = "login.php" method = "POST">
							<input type = "text" name = "uid" placeholder = "username/e-mail">
							<input type = "password" name = "pwd" placeholder = "password">
							<button type = "submit" name = "submit">Login</button>
							</form>
							<a href = "signup.php">Sign up</a>';

				}
?>
