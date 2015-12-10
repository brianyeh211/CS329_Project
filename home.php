<?php 
if (isset($_COOKIES['username']) == false) {
	header('Location: login.php');
}

ini_set('display_errors', 'On');
error_reporting(E_ALL);

$host = "fall-2015.cs.utexas.edu";
$user = "brianyeh";
$pwd = "he9SvtvKsh";
$dbs = "cs329e_brianyeh";
$port = "3306";

$connect = mysqli_connect ($host, $user, $pwd, $dbs, $port);

if (isset($_POST["title"])){
$posted = "Thank You for you submission!";
$today = date("Ymd");

$today2 = substr($today, 0, 4) . "-" . $today[4] . $today[5] . "-" . substr($today, 6, 8); 

#$user = $_COOKIE["username"];
$user = "anony";

$title = $_POST["title"];
$comment = $_POST["comment"];

	$stmt = mysqli_prepare ($connect, "INSERT INTO comments VALUES (?, ?, ?, ?)");
	mysqli_stmt_bind_param ($stmt, 'ssss', $user, $title, $comment, $today2);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);


}else {

$posted = "<br>Comment Title<br> 
	<input type='text' name='title'></input><br><br> Comment<br>
<textarea rows='8' cols='60' name ='comment'> </textarea><br>
	<button onclick='calc()' id='send' style='margin-right: 10px;'>Submit</button>";

}

$db_array = connect($connect);
#print header(css pages will differ), top (same for all pages), middle(diff for every page), footer(same for all)
print_header('./Home.css');
readfile('./top.html');
print_middle($db_array, $posted);
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

function print_middle($db_array, $posted){
$html_string = "";

 $script = $_SERVER['PHP_SELF'];

foreach($db_array as $array){

  $html_string .= "<div class='comment'> <p class='comment_title'>" . $array[1] . "<p class ='username'> by " . $array[0] . 
 " on " . $array[3] . "</p><p class='comment_preview'>" . $array[2] . "</p> </div>"; 
}
 print <<<Middle
		<div id="middle">
			$html_string

<form method="post" action="$script" id="form1" class="form">
$posted
					</form>
		</div>
Middle;
}
?>
