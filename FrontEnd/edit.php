<?php

include 'inc/config.php';

$errorstring = '';

include 'inc/edit.inc.php';

//include 'inc/head.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>View / Edit a Contact</title>


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
  	  	  <a href="view_contacts.php" class="waves-effect waves-light btn-large blue">Contacts</a>
  	  	</li>
          <li>
            <a href="logout.php" class="waves-effect waves-light btn-large blue">Logout</a>
          </li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <!-- Main Body Section -->
  <div class="container">
    <div class="section">

      <div class="orange-text h1">
        <h2>View / Edit a Contact</h2>
      </div>
<?php
        print $contactHTML;
        print '<h3 class ="center">Edit</h3>';
        $form = '
      <form id="sign_up_sheet" action="edit.php?contact_id='.$contact_id.'" method="post">
        <label for="First_Name">First Name:</label>
        <input type="text" name="first_name" placeholder="Enter First Name" value="'.$o->first_name.'" >
        <br><br>
        <label for="Last_Name">Last Name:</label>
        <input type="text" name="last_name" placeholder="Enter Last Name" value="'.$o->last_name.'">
        <br><br>
        <label for="phone_number">Phone Number:</label>
        <input type="tel" name="phone_number" placeholder="Enter a Phone Number" value="'.$o->phone_number.'">
        <br><br>

        <div >
          <label for="email">Email:</label>
          <input type="email" name="email" placeholder="Enter an email" value="'.$o->email.'">
          <br><br>
          <label for="address">Address:</label>
          <input type="text" name="address" placeholder="Enter your Address" value="'.$o->address.'">
         <!-- <br><br>
          <label for="Apt">Apt:</label>
          <input type="text" name="Apt" placeholder="Suite,Apt,Other">
          <br><br>-->
          <label for="city">City:</label>
          <input type="text" name="city" placeholder="Enter your City" value="'.$o->city.'">
          <br><br>
        </div>

        <label>State:</label>
        <select class="browser-default" name="state" value="'.$o->state.'">
          <option value="" disabled selected>Choose your option</option>
          <option value="AL">Alabama</option>
        	<option value="AK">Alaska</option>
        	<option value="AZ">Arizona</option>
        	<option value="AR">Arkansas</option>
        	<option value="CA">California</option>
        	<option value="CO">Colorado</option>
        	<option value="CT">Connecticut</option>
        	<option value="DE">Delaware</option>
        	<option value="DC">District Of Columbia</option>
        	<option value="FL">Florida</option>
        	<option value="GA">Georgia</option>
        	<option value="HI">Hawaii</option>
        	<option value="ID">Idaho</option>
        	<option value="IL">Illinois</option>
        	<option value="IN">Indiana</option>
        	<option value="IA">Iowa</option>
        	<option value="KS">Kansas</option>
        	<option value="KY">Kentucky</option>
        	<option value="LA">Louisiana</option>
        	<option value="ME">Maine</option>
        	<option value="MD">Maryland</option>
        	<option value="MA">Massachusetts</option>
        	<option value="MI">Michigan</option>
        	<option value="MN">Minnesota</option>
        	<option value="MS">Mississippi</option>
        	<option value="MO">Missouri</option>
        	<option value="MT">Montana</option>
        	<option value="NE">Nebraska</option>
        	<option value="NV">Nevada</option>
        	<option value="NH">New Hampshire</option>
        	<option value="NJ">New Jersey</option>
        	<option value="NM">New Mexico</option>
        	<option value="NY">New York</option>
        	<option value="NC">North Carolina</option>
        	<option value="ND">North Dakota</option>
        	<option value="OH">Ohio</option>
        	<option value="OK">Oklahoma</option>
        	<option value="OR">Oregon</option>
        	<option value="PA">Pennsylvania</option>
        	<option value="RI">Rhode Island</option>
        	<option value="SC">South Carolina</option>
        	<option value="SD">South Dakota</option>
        	<option value="TN">Tennessee</option>
        	<option value="TX">Texas</option>
        	<option value="UT">Utah</option>
        	<option value="VT">Vermont</option>
        	<option value="VA">Virginia</option>
        	<option value="WA">Washington</option>
        	<option value="WV">West Virginia</option>
        	<option value="WI">Wisconsin</option>
        	<option value="WY">Wyoming</option>
        </select>
        <br><br>

        <div class="h1">
          <button class="w3-button w3-white w3-border w3-border-orange w3-round-large">Submit</button>
        </div>

      </form>';

print $form;
?>


    </div>
    <br><br>
  </div>

        <!-- Footer Area -->
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
