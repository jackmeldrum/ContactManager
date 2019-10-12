<?php
session_start();
$errorstring = '';

if(isset($_POST['username'])) {
		// quickie "validation"
	if(
		!empty(trim($_POST['username']))
		&& !empty(trim($_POST['password']))

	) {
		include 'inc/post_contact.inc.php';
		die('Contact added!');
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
  <title>Contact Manager</title>

  <!-- CSS  --->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style>
    input[type=text]
    {
        width: 130px;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        background-color: white;
        background-image: url('searchicon.png');
        background-position: 10px 10px;
        background-repeat: no-repeat;
        padding: 12px 20px 12px 40px;
        -webkit-transition: width 0.4s ease-in-out;
        transition: width 0.4s ease-in-out;
      }

      input[type=text]:focus
      {
        width: 100%;
      }
  </style>
  <!--- -CSS  --->



</head>
<body>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" class="brand-logo"
      href="https://cop4331.club/"><img
      src="contactimage.png"
      alt="The Logo" width="70px" height="70px"></a>
      <ul class="right hide-on-med-and-down">

				<li>
		  	  <a href="view_contacts.php" class="waves-effect waves-light btn-large blue">Contacts</a>
		  	</li>
	        <li>
	          <a href="logout.php" class="waves-effect waves-light btn-large blue">Logout</a>
	        </li>
				</ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">Contact Manager</h1>
      <hr>
      <br><br>

      <nav>
      <div class="nav-wrapper">
          <ul class="left">
            <li><a href="home_page.php"><i class="material-icons left hide-on-med-and-down">home</i>Welcome</a></li>
            <li><a href="view_contacts.php"><i class="material-icons left hide-on-med-and-down">format_list_numbered</i>View</a></li>
            <li><a href="add.php"><i class="material-icons left hide-on-med-and-down">control_point</i>Add</a></li>
            <li><a href="search.php"><i class="material-icons left hide-on-med-and-down">search</i>Search</a></li>
          </ul>
        </div>
      </nav>
      <br><br><br>
    </div>
  </div>

     <!-- MAIN BODY FOR HOMEPAGE -->
  <div class="main_body container">
    <!-- <table>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Phone Number</th>
        <th>Email Address</th>
      </tr>
      <tr>
        <td>Shane</td>
        <td>Wade</td>
        <td>888-888-8888</td>
        <td>xyz@hotmail.com</td>
      </tr>
    </table> -->
  </div>


      <!-- FOOTER FOR HOMEPAGE -->
  <footer class="page-footer orange">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="footer-copyright">
      <div class="container">Made by Group 17</div>
    </div>

  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>



  </body>
</html>
