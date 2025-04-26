let password = document.getElementById("password");
let cPassword = document.getElementById("cpassword");
let eyePassword = document.getElementById("eyePassword");
let eyeCpassword = document.getElementById("eyeCpassword");

// Toggle visibility for password field
eyePassword.addEventListener("click", function () {
  if (password.value.trim() !== "") {
    if (password.type === "password") {
      password.type = "text";
      eyePassword.src = "eye-close.png";
    } else {
      password.type = "password";
      eyePassword.src = "eye-open.png";
    }
  }
});

// Toggle visibility for confirm password field
eyeCpassword.addEventListener("click", function () {
  if (cPassword.value.trim() !== "") {
    if (cPassword.type === "password") {
      cPassword.type = "text";
      eyeCpassword.src = "eye-close.png";
    } else {
      cPassword.type = "password";
      eyeCpassword.src = "eye-open.png";
    }
  }
});
