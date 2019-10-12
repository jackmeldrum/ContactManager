<?php
session_start();
$errorstring = '';

include 'inc/config.php';

if(isset($_POST['username'])) {
	// quickie "validation"
	if(!empty(trim($_POST['username'])) && !empty(trim($_POST['password']))) {
		include 'inc/post_user.inc.php';
		header("Location: login.php?Message=" . urlencode("Registration was Successful. Please sign in"));
		die('User registered!');
	} else {
		$errorstring = 'Error in input';
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Sign Up Page</title>
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" class="brand-logo"
      href="https://cop4331.club/"><img
      src="contactimage.png"
      alt="The Logo" width="70px" height="70px"></a>
      <ul class="right hide-on-med-and-down">

        <li>
			  <a href="/index.html" class="waves-effect waves-light btn-large blue">Home</a>
        </li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Login</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="container">
    <div class="section">

      <div class="orange-text h1">
        <h2>Sign Up</h2>
      </div>
		<div class="error"><?php print $errorstring; ?></div>
      <form id="sign_up_sheet" action="signup.php" method="post">
        <label for="user_Name">User Name:</label>
        <input type="text" name="username" placeholder="User Name">
        <br><br>
        <label for="Last_Name">Password:</label>
        <input type="password" name="password" placeholder="Password">
        <br><br>
        <br><br>
        <div class="h1">
          <button class="w3-button w3-white w3-border w3-border-orange w3-round-large">Sign Up</button>
        </div>


      </form>

    </div>
    <br><br>
  </div>

  <footer class="page-footer blue">
    <div class="footer-copyright">
      <div class="container center">
      Made by Group 17
      </div>
    </div>
  </footer>



  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
