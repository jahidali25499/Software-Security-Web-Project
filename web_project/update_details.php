<?php
	
	session_start();

	$conn = mysqli_connect( "127.0.0.1", "root", "1qaz2wsx", "web_project" );

	$details = array ( 

	"username" => $_POST["username"],
	"password" => $_POST["password"],
	"first_name" => $_POST["fir_name"],
	"last_name" => $_POST["last_name"],
	"email" => $_POST["email"],
	"address" => $_POST["address"],

	);

	foreach ($details as $key => $value) {

		if ($value !== "") {

			$sql = "UPDATE users SET " . $key . "=" . "'".$value . "'" . " WHERE uid=" . $_SESSION["uid"];

			if (mysqli_query($conn, $sql)) {
			} 
			else {
			  echo "<script> alert('Error updating record: " . mysqli_error($conn) . "); </script>";
			}
		}
	}

	echo "<script> alert('Record Successfully Inserted'); window.location.replace('/profile.php');</script>";	

?>