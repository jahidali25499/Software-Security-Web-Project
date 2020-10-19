<html>
<link rel="stylesheet" href="pure-min.css">

<head>

</head>

<body>

<nav class="navbar">
	<a style="float:left; background:none; color:white; font-size:25px;" href="/joke.php">Definitely Secure Website</a>
  	<a href="/login.php">Login</a>
  	<a href="/register.php">Register</a>
</nav>

<span style="position: fixed; margin: auto; top: 0; right: 0; bottom: 0; left: 0; width: 500px; height: 200px;">

<!--<h3>Please login (or not)</h3> -->

<form class="pure-form pure-form-stacked" action="trylogin.php" method="post">
  <fieldset>
    <label for="username">Username:</label>
    <input type="text" id="usename" name="username">

    <label for="password">Password:</label>
    <input type="password" id="password" name="password">

    <button type = "submit" class="pure-button pure-button-primary">Login</button>
  </fieldset>
</form>

</body>


</span>
<html>










