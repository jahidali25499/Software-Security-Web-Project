<html>
<link rel="stylesheet" href="pure-min.css">
<body>

<?php

	session_start();

	// kick out users who don't bother to login

	if ($_SESSION["login"] !== true) {
		header("Location: /login.php");
	}

	if (!isset($_GET['user'])) {
		header("Location: /joke.php?user=". $_SESSION["username"]);
	}

?>

<nav class="navbar">
  <a href="/joke.php" style="float:left; background:none; color:white; font-size:25px;">Definitely Secure Website</a>
  <a href="/logout.php">Logout</a>
  <a href="/profile.php"><?php echo $_SESSION["username"]; ?></a>

</nav>


 <span style='position: absolute; margin: auto; top: 0; right: 0; bottom: 0; left: 0; width: 500px; height: 200px;'><b>Joke:</b><br><br>

<?php

//echo "<span style='position: absolute; margin: auto; top: 0; right: 0; bottom: 0; left: 0; width: 500px; height: 200px;'><b>Joke:</b><br>";
//get parameters from the URL
	$user_requested = $_SESSION['username'];
	$conn = new mysqli( "127.0.0.1", "root", "1qaz2wsx", "web_project" );
	$sql = "SELECT comment FROM all_comments inner join users on all_comments.uid = users.uid WHERE username='" . $user_requested . "'";
	$result = mysqli_query( $conn, $sql );

	while($row = $result->fetch_assoc()) {
  	echo $row['comment']. "<br><br>";
 	}
?>
<br><br><p>Add a new joke?
<form class="pure-form pure-form-stacked" action="/newjoke.php" method="post">
<textarea rows="10" cols="50" name="newjoke"></textarea>
<input type="submit" value="submit new joke">
</form>
<br>

</body>
</html>






