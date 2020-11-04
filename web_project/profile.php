<html>
<link rel="stylesheet" href="pure-min.css">

<head>

<?php

  session_start();

	
  // kick out users who don't bother to login
  if ($_SESSION["login"] !== true) {
    header("Location: /login.php");
  }

  	
?>
 
</head>

<body>

<nav class="navbar">
	<a style="float:left; background:none; color:white; font-size:25px;" href="/joke.php">Definitely Secure Website</a>
  	<a href="/logout.php">Logout</a>
</nav>

<span style="position: absolute; margin: auto; top: 0; right: 0; bottom: 0; left: 0; width: 400px; height: 350px;">

<h3>Update your details</h3> 

<form class="pure-form pure-form-stacked" action="/update_details.php" method="post">
  <fieldset>

    <label for="username">Username:</label>
    <input type="text" id="usename" name="username" value= <?php echo '"'. htmlspecialchars($_SESSION["username"]) . '"'; ?> >

    <label for="password">Password:</label>
    <input type="password" id="password" name="password"> 

    <label for="con_password">Confirm Password:</label>
    <input type="password" id="con_password" name="con_password"> 

    <label for="fir_name">First Name:</label>
    <input type="fir_name" id="fir_name" name="fir_name" value= <?php echo htmlspecialchars($_SESSION["first_name"]) ; ?> > 
  
    <label for="last_name">Last Name:</label>
    <input type="last_name" id="last_name" name="last_name" value= <?php echo '"'. htmlspecialchars($_SESSION["last_name"]) . '"'; ?> >

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value= <?php echo '"'. htmlspecialchars($_SESSION["email"]) . '"'; ?> > 

    <label for="address">Address:</label> 
    <input type="address" id="address" name="address" value= <?php echo '"'. htmlspecialchars($_SESSION["address"]) .'"'; ?> > <br><br>

    <button type = "submit" class="pure-button pure-button-primary">Update</button>
  </fieldset>
</form>

<script src="check_password.js"></script>



</body>


</span>
<html>










