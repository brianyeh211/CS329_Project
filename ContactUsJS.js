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

    var regex=/^[a-zA-Z]+$/;
    first = username.charAt(0);

    if (!first.match(regex))
    {
        //alert("Must input letter first");
        userpassed = false;
    }
    
}