<?php

include 'inc/config.php';

$errorstring = '';

if(isset($_POST['username'])) {
		// quickie "validation"
	if(
		!empty(trim($_POST['username']))
		&& !empty(trim($_POST['password']))

	) {
		include 'inc/login.inc.php';
		die('Logged in!');

	} else {
		$errorstring = 'Error in input';
	}
}

if (isset($_GET['Message']))
{
    print $_GET['Message'];
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Login Page</title>

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
			  <a href="/login.php" class="waves-effect waves-light btn-large blue">Login</a>
        </li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Login</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <!-- This div accesses old site -->
  <div class="container" >
    <div class="section">

      <div class="orange-text h1">
        <h2>Login</h2>
      </div>
		<div class="error"><?php print $errorstring; ?></div>
      <form id="sign_up_sheet" method="post" action="login.php">
        <label for="user_Name">User Name:</label>
        <input type="text" name="username" placeholder="User Name">
        <br><br>
        <label for="Last_Name">Password:</label>
        <input type="password" name="password" placeholder="Password">
        <br><br>
        <div class="h1">
					<?php
						if ($_GET['error']== 1)
						{

						?>
						<p>Username/ Password Invalid Try Again</p>

					 <?php
				 		}
					 ?>

          <button class="w3-button w3-white w3-border w3-border-orange w3-round-large">Login</button>
        </div>
      </form>
    </div>
    <br><br>
  </div>

  <!-- This div accesses new API -->
  <div id="loginDiv" class="container" style="display:none; visibility:hidden;">
	<div class="section">

	  <div class="orange-text h1">
		<h2>Login to New Site</h2>
	  </div>
	  <div class="error"><?php print $errorstring; ?></div>
	  <form id="sign_up_sheet" method="post" action="login.php">
		<label for="user_Name">User Name:</label>
		<input id="loginName" type="text" name="username" placeholder="User Name">
		<br><br>
		<label for="Last_Name">Password:</label>
		<input id="loginPassword" type="password" name="password" placeholder="Password">
		<br><br>
		<div class="h1">
			<button type="button" id="loginButton" class="w3-button w3-white w3-border w3-border-orange w3-round-large" onclick="doLogin();"> Login </button>
			<span id="loginResult"></span>
		</div>
	  </form>
	</div>
	<br><br>

  </div>


  <div id = "main-contact-page" class="container" style="display:none; visibility:hidden;">
	<br><br>
	<h1 class="header center orange-text">Contact Manager</h1>
	<hr>
	<br><br>

	<nav>
	  <div class="nav-wrapper">

		<ul class="left hide-on-med-and-down">
		  <li><a href="view_contacts.php"><i class="material-icons left hide-on-med-and-down">home</i>Welcome</a></li>
		<li><a id="view_button" href="#"><i class="material-icons left hide-on-med-and-down">format_list_numbered</i>View</a></li>
		  <li><a href="add.php"><i class="material-icons left hide-on-med-and-down">control_point</i>Add</a></li>
		  <li><a href="#"><i class="material-icons left hide-on-med-and-down">favorite</i>Favorites</a></li>
		  <li><a href="search.php"><i class="material-icons left hide-on-med-and-down">search</i>Search</a></li>
		</ul>

	  </div>
	</nav>


  </div>


    <!-- <div id="loginDiv">
    	<span id="inner-title">PLEASE LOG IN</span>
    	<input type="text" id="loginName" placeholder="Username" /><br />
    	<input type="password" id="loginPassword" placeholder="Password"/><br />
    	<button type="button" id="loginButton" class="buttons" onclick="doLogin();"> Do It </button>
    	<span id="loginResult"></span>
    </div> -->



  <footer class="page-footer blue">
    <div class="footer-copyright">
      <div class="container center">
      Made by Group 17
      </div>
    </div>
  </footer>



  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/professorCode.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
