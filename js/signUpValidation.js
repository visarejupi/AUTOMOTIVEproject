function validate() {
  var username = document.signup_form.username;
  var email = document.signup_form.email;
  var password = document.signup_form.password;
  var confirmpassword = document.signup_form.confirmpassword;

  var nameError = document.getElementById('nameError');
  var emailError = document.getElementById('emailError');
  var passwordError = document.getElementById('passError');
  var confirmpasswordError = document.getElementById('confirmpassError');

  if (username.value.length <= 0) {
    alert('Username is required');
    username.focus();
    return false;
  } else if (username.value.length < 6) {
    alert('Username should be 6 or longer characters');
    username.focus();
    return false;
  }
  if (email.value.length <= 0) {
    alert('Email is required');
    email.focus();
    return false;
  }
  if (password.value.length <= 0) {
    alert('Password is required');
    password.focus();
    return false;
  }
  if (password.value.length < 8) {
    alert('Password should have 8 characters or more');
    password.focus();
    return false;
  }
  if (confirmpassword.value != password.value) {
    alert('The password and confirmation password do not match');
    confirmpassword.focus();
    return false;
  } else {
    return true;
  }
}
