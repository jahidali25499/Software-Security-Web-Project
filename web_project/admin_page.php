<?php


session_start();

if ($_SESSION["username"] !== "victor") {

	echo "<script>alert('Only an administrator can access this page!');</script>";
	echo "<script>window.location.href('/joke.php');</script>";

}

else {
	
	echo "Super secret admin configurations details here...";

}





