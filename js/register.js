function showRegisterForm() {
   document.getElementById('register-form').style.display = 'block';
   document.getElementById('login-form').style.display = 'none';
   document.querySelector('.singup-tab').classList.add('active');
   document.querySelector('.login-tab').classList.remove('active');
}

function showLoginForm() {
   document.getElementById('register-form').style.display = 'none';
   document.getElementById('login-form').style.display = 'block';
   document.querySelector('.login-tab').classList.add('active');
   document.querySelector('.singup-tab').classList.remove('active');
}

const signupTab = document.querySelector('.singup-tab');
const loginTab = document.querySelector('.login-tab');

signupTab.addEventListener('click', () => {
   signupTab.classList.add('active');
   loginTab.classList.remove('active');
});

loginTab.addEventListener('click', () => {
   loginTab.classList.add('active');
   signupTab.classList.remove('active');
});

document.addEventListener("DOMContentLoaded", () => {
   const signUpTab = document.querySelector(".singup-tab");
   const loginTab = document.querySelector(".login-tab");
   const registerForm = document.getElementById("register-form");
   const loginForm = document.getElementById("login-form");

   function showRegisterForm() {
      loginTab.classList.remove("active");
      loginTab.style.color = "rgba(0, 0, 0, 0.5)";
      loginTab.style.borderBottom = "none";

      signUpTab.classList.add("active");
      signUpTab.style.color = "#000000";
      signUpTab.style.borderBottom = "2px solid #000000";

      registerForm.style.display = "block";
      loginForm.style.display = "none";
   }

   function showLoginForm() {
      signUpTab.classList.remove("active");
      signUpTab.style.color = "rgba(0, 0, 0, 0.5)";
      signUpTab.style.borderBottom = "none";

      loginTab.classList.add("active");
      loginTab.style.color = "#000000";
      loginTab.style.borderBottom = "2px solid #000000";

      loginForm.style.display = "block";
      registerForm.style.display = "none";
   }

   signUpTab.addEventListener("click", showRegisterForm);
   loginTab.addEventListener("click", showLoginForm);
});