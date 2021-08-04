const login_btn = document.querySelector("#login-btn");
const reg_btn = document.querySelector("#registration-btn");
const container = document.querySelector(".container");


registration-btn.addEventListener('click', () => {
  container.classList.add("registration-mode");
});

login-btn.addEventListener('click', () => {
  container.classList.remove("login-mode");
});
