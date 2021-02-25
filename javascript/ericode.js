function reveal(){
    document.getElementById("navbutton").innerHTML = "arrow_back";
    document.getElementById("navlink").setAttribute("onClick","hide()" );
    document.getElementById("navbar").style.width = "70%";


  }

  function hide(){
    document.getElementById("navbutton").innerHTML = "menu";
    document.getElementById("navlink").setAttribute("onclick","reveal()" );
    document.getElementById("navbar").style.width = " 0%";
  }


  function showPassword(){
  var checkbox = document.getElementById("showpassword");
  var password = document.getElementById("password");
  var password1 = document.getElementById("password1")


  if (checkbox.checked == true){
   password.setAttribute("type", "text");
   password1.setAttribute("type", "text");
 }
   else {
    password.setAttribute("type", "password");
    password1.setAttribute("type", "password");
   }
   
}