<?php 

ini_set('display_errors', 'On');
error_reporting(E_ALL);

print_header('./ContactUs.css');
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
function print_middle(){


 print <<<Middle
		<div id="middle">

			<div id="contact">

				<form id="form1" class="form">
					<table border="0" style="width:50%">
						<caption> Contact us <br> Please let us know if there are any problems on the site or if you have questions! <Us> </caption>
						<br>
						<tbody>
							<tr><td><br></td></tr>
							<tr>
								<td class='label'>Name: </td>
								<td class='input'><input type="text" id="name"><br></td>
							</tr>
							<tr>
								<td class='label'>Telephone: </td>
								<td class='input'> <input type="tel" id="telephone"> (Only enter numbers)</td>
							</tr>
							<tr>
								<td class='label'>Email: </td>
								<td class='input'> <input type="email" id="email"></td>
							</tr>
							<tr>
								<td valign="top" class='label'>General Comments: </td>
								<td class= 'input'> <textarea rows="4" cols="30" name="additionalcomments"> </textarea></td>
							</tr>
							<tr>
								<td></td>
								<td class='buttons'><button onclick="calc()" id="send" style="margin-right: 10px;">Send</button>  <button type="reset" value="Reset">Reset</button></td>
							</tr>
						</tbody></table>
					</form>
				</div>
			</div>
		</div>

Middle;
}
?>
