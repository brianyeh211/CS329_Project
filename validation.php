<?php
	session_start();
	extract($_POST);
	$username = $_POST["username"];
	$password = $_POST["password"];

	$combo = $username.":".$password;
	
	if ($fh = fopen('passwd.txt', 'r')){
		while (($line = fgets($fh)) !== false) {
			$line = trim($line, "\n");
			$array = explode(':', $line);
			$passwd = $array[0].":".$array[1];
			if ($combo == $passwd) {
				$_SESSION['username'] = $username;
				setcookie ('username', $combo, time()+120, '/', 'cs.utexas.edu', '0');
				header('Location: Home.html');
			}
		}
	}
?>