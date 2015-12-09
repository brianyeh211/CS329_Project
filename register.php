<?php
	extract($_POST);
	$username = $_POST["username"];
	$password = $_POST["password"];

	//$password = crypt($password);

	$combo = $username.":".$password;
	
	if ($fh = fopen('passwd.txt', 'r')){
		while (($line = fgets($fh)) !== false) {
			$line = trim($line, "\n");
			$array = explode(":", $line);
			$check = $array[0];
			if ($check==$username) {
				header('Location: fail.html');
				exit;
			}
		}
	}

	fclose($fh);

	if ($fh = fopen('passwd.txt', 'a')){
		fwrite($fh, $combo.PHP_EOL);
		$_SESSION['username'] = $username;
		setcookie ('username', $combo, time()+120, '/', 'cs.utexas.edu', '0');
		header('Location: Home.html');
	}
?>