<?php

$external_url = escapeshellcmd($_GET["url"]);
$file_name = escapeshellcmd($_GET["filename"]);

// Lets add some security :)

function is_ssrf($url) {

	if (strpos($url, "/") === false) {
		$url .= "/";
	}

	echo $url;
	echo "<br><br>"; 
	
	$split_url = explode("/", $url);
	$hostname = $split_url[0];
	echo $hostname;
	echo "<br><br>";

	$ip_address = gethostbyname($hostname);
	$deny = array("192.168.0.1", "127.0.0.1");
	echo $ip_address;
	echo "<br><br>";

	// if ip in deny list SSRF is detected
	if (in_array($ip_address, $deny)) {
		echo "SSRF Detected!";
		return true;
	}
	// All is good :)
	else {
		return false;
	}
}

$extension = ".jpg";

// Check whether the 'jpeg' extension is attached to file for added security
if (strpos($external_url, $extension) !== false) {

	if (is_ssrf($external_url) === false) {
		
		// run wget to download image
		$command = "wget " . $external_url . " -O " . $file_name . ".jpg";
		exec($command . ' 2>&1', $output);
		var_dump($output);
		echo "Photo uploaded!";	
		echo "<br><br> go <a href=/profile.php>back</a>";
	}
}

else {
	echo "Only a '.jpg' file is allowed to be downloaded";
}

?>



