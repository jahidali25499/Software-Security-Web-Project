var password = document.getElementById("password")
  , confirm_password = document.getElementById("con_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
con_password.onkeyup = validatePassword;
