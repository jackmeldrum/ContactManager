<?php
 session_destroy();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Logout Page</title>

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
  <div class="parallax-container">
   <div class="parallax"><img src="contact76.jpg"></div>

   <div class="container">
     <br><br>
     <br><br>
     <br><br>

     <h1 class="header center white-text">Thank you for choosing Contact Manager</h1>
     <div class="row center">
  	 <h5 class="header col s12 light white-text">Never forget your contacts again!</h5>
     </div>
     <br><br>
     <div class="row center">
     </div>
     <br><br>

   </div>
  </div>
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
