<?php
	session_start();
	extract($_POST);
	$username = $_POST["username"];
	$password = $_POST["password"];

	$combo = $username.":".$password;
	
	if ($fh = fopen('passwd.txt', 'r')){
		while (($line = fgets($fh)) !== false) {
			$line = trim($line, "\n");
			if ($combo == $line) {
				$_SESSION['username'] = $username;
				header('Location: Home.html');
			}
		}
	}
?>