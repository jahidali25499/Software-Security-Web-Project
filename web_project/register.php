<html>
<link rel="stylesheet" href="pure-min.css">

<head>

</head>

<body>

<nav class="navbar">
	<a style="float:left; background:none; color:white; font-size:25px;">Definitely Secure Site</a>
  	<a href="/login.php">Login</a>
  	<a href="/register.php">Register</a>
</nav>

<span style="position: absolute; margin: auto; top: 0; right: 0; bottom: 0; left: 0; width: 400px; height: 350px;">

<h3>Register an account</h3> 

<form class="pure-form pure-form-stacked" action="trylogin.php" method="post">
  <fieldset>
    <label for="username">Username:</label>
    <input type="text" id="usename" name="username">

    <label for="password">Password:</label>
    <input type="password" id="password" name="password"> 

    <label for="con_password">Confirm Password:</label>
    <input type="con_password" id="con_password" name="con_password"> 

    <label for="fir_name">First Name:</label>
    <input type="fir_name" id="fir_name" name="fir_name"> 
  
    <label for="last_name">Last Name:</label>
    <input type="last_name" id="last_name" name="last_name">

    <label for="email">Email:</label>
    <input type="email" id="email" name="email"> 

    <label for="address">Address:</label> 
    <input type="address" id="address" name="address"><br><br>

    <button type = "submit" class="pure-button pure-button-primary">Register</button>
  </fieldset>
</form>

</body>


</span>
<html>










