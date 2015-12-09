<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);

$db_array = "";
#print header(css pages will differ), top (same for all pages), middle(diff for every page), footer(same for all)
print_header('./Home.css');
readfile('./top.html');
print_middle($db_array);
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
			This website is for people to post rants/confessions anonymously. There will also be a comment feature and an upvote feature for every post. Users can sort posts by popularity or by time.
	
		</div>

Middle;
}
?>
