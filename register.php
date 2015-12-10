<?php

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
	            <form name="login" method="post" action="./registration.php">
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
