<?php


session_start();

header("Content-Security-Policy: script-src 'none'");

if ($_SESSION["username"] !== "victor") {

	echo "<script>alert('Only an administrator can access this page!');</script>";
	echo "<script>window.location.href('/joke.php');</script>";

}

else {

	$conn = new mysqli( "127.0.0.1", "root", "1qaz2wsx", "web_project" );
 	$sql = "SELECT * FROM users";
    $result = mysqli_query( $conn, $sql );
 
    while($row = $result->fetch_assoc()) {
		echo $row['username']. '<br>';
		echo $row['first_name'] . '<br>';
		echo $row['last_name'] . '<br>';
		echo $row['email'] . '<br>';
		echo $row['address']. "<br><br><br>";
    }

}

echo "<script>alert(1)</script>";



