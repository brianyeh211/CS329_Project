<?php 
if (isset($_COOKIES['username']) == false) {
	header('Location: login.php');
}

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
	<script type="text/javascript" src="ContactUs.js"></script>
	
	<script type = "text/javascript"> 

    var xhr;
    if (window.ActiveXObject)
    {
    xhr = new ActiveXObject("Microsoft.XMLHTTP");
    }
    else if (window.XMLHttpRequest)
    {
    xhr = new XMLHttpRequest();
    }

    function callServer(){ 
        var user = document.getElementById("username").value; 
        if (user == ""){
            return;
        }
        if (user == null){
            return;
        }

        //CHANGE URL
        var url = "http://zweb.cs.utexas.edu/users/cs329e-fa15/brianyeh/CS329e_Proj/getUser.php?user="+escape(user);
        //var url = "http://zweb.cs.utexas.edu/users/cs329e-fa15/en3643/Project_Phase_V/getUser.php?user="+escape(user);

        xhr.open("GET", url, true);
        xhr.onreadystatechange = updatePage;
        xhr.send(null);
    }

    function updatePage(){
        if((xhr.readyState == 4) && (xhr.status == 200)) {
            var return_data = xhr.responseText;
            if (return_data){
                window.alert(return_data);
                var data = return_data.split(':');
                document.getElementById('telephone').value = data[2];
            	document.getElementById('email').value = data[3];
            }
        }
    }

    </script>   

</head>

PAGE1;
}
function print_middle(){


 print <<<Middle
		<div id="middle">

			<div id="contact">

				<form id="form1" class="form" action="">
					<table border="0" style="width:50%">
						<caption> Contact us <br> Please let us know if there are any problems on the site or if you have questions! <Us> </caption>
						<br>
						<tbody>
							<tr><td><br></td></tr>
							<tr>
								<td class='label'>UserName: </td>
								<td class='input'><input type="text" id="username" onchange="callServer();"><br></td>
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
