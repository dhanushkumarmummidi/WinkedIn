"use strict";
var gridcontainer=document.getElementsByClassName("grid-container")[0];
var loc=window.location.pathname;
var left=document.getElementsByClassName("left")[0];
var right=document.getElementsByClassName("right")[0];

var header=document.getElementsByClassName("header")[0];
var quotes=document.getElementsByClassName("quotes")[0];
var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirmpwd");
if(loc.includes("login.php")||loc.includes("forgetpassword.php")){
   
    header.getElementsByTagName("a")[0].hidden="hidden";
    quotes.style.marginLeft="65%";
    quotes.style.marginTop="15%";
    quotes.style.textAlign="center";
    quotes.style.marginBottom="5%";
    quotes.style.width="70%";
    quotes.style.opacity="0.8";
}
else if(loc.includes("register.php")||loc.includes("personalinfo.php")){

}
else if(loc.includes("profile.php")){
    var register=right.getElementsByClassName("register")[0];
    
    header.getElementsByTagName("a")[0].hidden="hidden";
    quotes.style.marginLeft="20%";
    quotes.style.marginTop="14%";
    quotes.style.marginBottom="3%";
    quotes.style.width="50%";
    quotes.style.opacity="0.8";
    register.style.marginLeft="-26%";
    register.style.marginTop="14%";
    register.style.marginBottom="3%";
    register.style.borderTopLeftRadius="0px";
    register.style.borderBottomLeftRadius="0px";
    quotes.style.borderTopRightRadius="0px";
    quotes.style.borderBottomRightRadius="0px";
    register.style.width="98%";
    left.getElementsByTagName("div")[0].style.fontSize="20px";
    left.getElementsByTagName("div")[0].style.color="white";
    quotes.style.height="100vw";
    register.style.height="99vw";
    document.getElementsByTagName("iframe")[0].style.height="100%";
    register.style.opacity="0.8";
    header.getElementsByTagName('form')[0].style.visibility="visible";
    header.style.opacity="1";
}
else
{
    //gridcontainer.style.backgroundImage="url('images/home_bg.jpg')";
    //gridcontainer.style.backgroundSize="100% 100%";
    header.getElementsByTagName("a")[0].hidden="hidden";
    quotes.style.marginLeft="29.5%";
    quotes.style.marginTop="15%";
    quotes.style.textAlign="center";
    quotes.style.marginBottom="5%";
    quotes.style.width="140%";
}
function validatePassword(){
    if(password.value != confirm_password.value) {
      confirm_password.setCustomValidity("Passwords Don't Match");
    } else {
      confirm_password.setCustomValidity('');
    }
  }
  document.getElementById("registerbtn").addEventListener("click",validatePassword);