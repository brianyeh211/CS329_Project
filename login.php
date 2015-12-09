<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);



$host = "fall-2015.cs.utexas.edu";
$user = "brianyeh";
$pwd = "he9SvtvKsh";
$dbs = "cs329e_brianyeh";
$port = "3306";

$connect = mysqli_connect ($host, $user, $pwd, $dbs, $port);
$db_array = connect($connect);

#print header(css pages will differ), top (same for all pages), middle(diff for every page), footer(same for all)
print_header('./Home.css');
readfile('./top.html');
print_middle($db_array);
readfile('./footer.html');




function connect($connect){
if (empty($connect))
{
print('fail');
  die("mysqli_connect failed: " . mysqli_connect_error());
}

$table = "comments";
$result = mysqli_query($connect, "SELECT * from $table");
$array_final = array();

while ($row = $result->fetch_row())
{
  $array_row = array($row[0], $row[1], $row[2], $row[3]);
  array_push($array_final, $array_row); 
}
$result->free();
return $array_final;
}

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
$comment_title = $db_array[0][1];
$comment_content = $db_array[0][2];

 print <<<Middle
			<div id="middle">
				<table align="" width="50%" border="0">
	            <form name="login" method="post" action="./validation.php">
	                <tr>
	                    <td>Userr Name:</td>
	                    <td><input id="username" type="text" name="username" onchange="callServer();" ></td>
	                </tr>
	                <tr>
	                    <td>Password:</td>
	                    <td><input id="password" type="text" name="password"></td>
	                </tr>
	                <tr>
	                	<td><a href="register.html">Make New Account</a></td>
	                </tr> 
	                <tr>
	                    <td>
	                    <input type="submit" value="Login" >
	                    <input type="eset" value="Reset" >
	                    </td>
	                </tr>
	            </form>
        	</table>

			<br>
		</div>

Middle;
}
?>
