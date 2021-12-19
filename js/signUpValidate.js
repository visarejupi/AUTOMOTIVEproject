var username = document.forms['signup_form']['username'];
var email = document.forms['signup_form']['email'];
var password = document.forms['signup_form']['password'];
var confirmpassword = document.forms['signup_form']['confirmpassword'];

var name_error = document.getElementById('nameError');
var email_error = document.getElementById('emailError');
var pass_error = document.getElementById('passError');
var confirmpass_error = document.getElementById('confirmpassError');

username.addEventListener('textInput', username_Verify);
password.addEventListener('textInput', pass_Verify);
password.addEventListener('textInput', confirmpass_Verify);

function validated() {
  if (username.value.length < 5) {
    username.style.border = '1px solid red';
    name_error.innerHTML = 'Username must have 5 characters or more';
    username.focus();
    return false;
  }
  if (password.value.length < 6) {
    password.style.border = '1px solid red';
    pass_error.innerHTML = 'Password must have 6 characters or more';
    password.focus();
    return false;
  }
  if (confirmpassword != password) {
    confirmpassword.style.border = '1px solid red';
    confirmpass_error.innerHTML = "Password don't match";
    confirmpassword.focus();
    return false;
  }
}
function username_Verify() {
  if (username.value.length >= 5) {
    username.style.border = '1px solid silver';
    name_error.style.display = 'none';
    return true;
  }
}
function pass_Verify() {
  if (password.value.length >= 6) {
    password.style.border = '1px solid silver';
    pass_error.style.display = 'none';
    return true;
  }
}
function confirmpass_Verify() {
  if (confirmpassword == password) {
    password.style.border = '1px solid silver';
    pass_error.style.display = 'none';
    return true;
  }
}
