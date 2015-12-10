<?php
	$username = $_GET["user"];

	if ($fh = fopen('passwd.txt', 'r')){
		while (($line = fgets($fh)) !== false) {
			$line = trim($line, "\n");
			$array = explode(":", $line);
			$check = $array[0];
			if ($check==$username) {
				echo $array[0].":".$array[1].":".$array[2].":".$array[3];
			}
		}
	}
?>