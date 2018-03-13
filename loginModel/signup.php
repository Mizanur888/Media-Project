
 <?php

          //TODO-INclude Header here
  ?>
<section class ="main-container">
		<div class = "main-wrapper">
			<h2>Sign Up </h2>
  		<form class = "signup-form"  action = " signup.process.php" method="POST" >
  				<div>
  					<input type = "text" name = "first" class = "textInput" placeholder = "First Name">
  				</div>
  				<div>
  					<input type = "text" name = "last" class = "textInput" placeholder = "Last Name">
  				</div>
  				<div>
  					<input type = "email" name = "email" class = "textInput" placeholder = "Email Address">
  				</div>
  				<div>
  					<input type = "text" name = "uid" class = "textInput" placeholder = "user name">
  				</div>
  				<div>
  					<input type = "password" name = "password" class = "textInput" placeholder = "user password">
  				</div>
          <div>
  					<input type = "password" name = "confromPassword" class = "textInput" placeholder = "confirm password">
  				</div>
  				<button type = "submit" name = "submit"> Sign Up</button>

			</form>
		</div>
	</section>
  <?php 

           //TODO-INclude footer here
   ?>
