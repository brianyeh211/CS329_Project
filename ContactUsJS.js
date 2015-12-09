

/*$("#send").click(calc());
*/
  function calc ()
  {
    
    var username = document.getElementById("name").value;
    var tel = document.getElementById("telephone").value;
    var email = document.getElementById("email").value;
    var userpassed = true;


    if (!tel.match("^[0-9]*$")){
      alert("Telephone must be all digits");
      return; 
    }
/* 
   if (username.length < 6 || username.length > 10) {
      //console.log(username.length);
      userpassed = false;
      alert("length wrong");
      
    } 

    var regex=/^[a-zA-Z]+$/;
    first = username.charAt(0);

    if (!first.match(regex))
    {
        //alert("Must input letter first");
        userpassed = false;
    }


    for(var i= 0, len = username.length; i < len; i++){
      if (username[i].match("^[a-zA-Z0-9]+$") == null){
        userpassed = false;
        //alert(username[i])
        //alert("must be lteter or number");
      }
    }

    if (pass != repass){
      userpassed = false;
   // alert("pass must match");
}


if (pass.length < 6 || pass.length > 10) {
      //console.log(username.length);
      userpassed = false;
      //alert("length wrong");
      
    } 
    for(var j= 0, len = pass.length; j < len; j++){
      if (pass[j].match("^[a-zA-Z0-9_]*$") == null){
        userpassed = false;
        //alert(pass[j]);
        //alert("must be lteter or number");
      }
    }
    
    var tot = 0;
    var tot1 = 0;
    var tot2 = 0;
    for(var j= 0, len = pass.length; j < len; j++){
      if (pass[j].match("[a-z]")){
        tot ++;
        //alert(pass[j]);
        //alert("must be lteter or number");
      } else if (pass[j].match("[A-Z]")){
        tot1 ++;
      } else if (pass[j].match("^[0-9]*$")){
        tot2 ++;
      }
    }

    if (tot < 1 || tot1 < 1 || tot2 < 1){
      userpassed = false;
    }

    if (userpassed == false){
      alert("Invalid Input");
    } else {
      alert("Passed Validation");
    }
*/
}