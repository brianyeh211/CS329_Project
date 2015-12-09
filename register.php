<?php
/*
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
*/

print_header('./Home.css');
readfile('./top.html');
print_middle();
readfile('./footer.html');


function print_header($css){
 $script = $_SERVER['PHP_SELF'];
$html_string = "";

 print <<<PAGE1
 <!DOCTYPE html> 
<html>
<head>
	<title>The Down Low</title>
	<link rel = "stylesheet" title = "basic style" type = "text/css" 
	href = "$css"  />
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500' rel='stylesheet' type='text/css'>
</head>

PAGE1;
}
function print_middle($db_array){

 print <<<Middle
		<div id="middle">

<h3>Make new Account</h3>
			<table align="" width="50%" border="0">
	            <form name="login" method="post" action="./register.php">
	                <tr>
	                    <td>User Name:</td>
	                    <td><input id="username" type="text" name="username" onchange="callServer();" ></td>
	                </tr>
	                <tr>
	                    <td>Password:</td>
	                    <td><input id="password" type="text" name="password"></td>
	                </tr>
	                <tr>
	                    <td>Telephone:</td>
	                    <td><input id="password" type="text" name="telephone"></td>
	                </tr>
	                <tr>
	                    <td>Email:</td>
	                    <td><input id="password" type="text" name="email"></td>
	                </tr>
	                <tr>
	                    <td>
	                    <input type="submit" value="Submit" >
	                    <input type="reset" value="Reset" >
	                    </td>
	                </tr>
	            </form>
        	</table>

	</div>

Middle;

}
?>
