var username = document.forms['form']['username'];
var password = document.forms['form']['password'];

var name_error = document.getElementById('nameError');
var pass_error = document.getElementById('passError');

username.addEventListener('textInput', email_Verify);
password.addEventListener('textInput', pass_Verify);

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
}
function email_Verify() {
  if (username.value.length >= 8) {
    username.style.border = '1px solid silver';
    name_error.style.display = 'none';
    return true;
  }
}
function pass_Verify() {
  if (password.value.length >= 5) {
    password.style.border = '1px solid silver';
    pass_error.style.display = 'none';
    return true;
  }
}
