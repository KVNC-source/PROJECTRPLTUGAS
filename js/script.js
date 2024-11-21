let profile = document.querySelector(".header .flex .profile");

document.querySelector("#user-btn").onclick = () => {
  profile.classList.toggle("active");
  search.classList.remove("active");
};

let search = document.querySelector(".header .flex .search-form");

document.querySelector("#search-btn").onclick = () => {
  search.classList.toggle("active");
  profile.classList.remove("active");
};

let sideBar = document.querySelector(".side-bar");

document.querySelector("#menu-btn").onclick = () => {
  sideBar.classList.toggle("active");
  document.body.classList.toggle("active");
};

document.querySelector("#close-btn").onclick = () => {
  sideBar.classList.remove("active");
  document.body.classList.remove("active");
};

window.onscroll = () => {
  profile.classList.remove("active");
  search.classList.remove("active");

  if (window.innerWidth < 1200) {
    sideBar.classList.remove("active");
    document.body.classList.remove("active");
  }
};

// Function to switch between login and registration forms
function showForm(form) {
  const loginForm = document.getElementById("login-form");
  const registerForm = document.getElementById("register-form");

  if (form === "login") {
    loginForm.style.display = "block";
    registerForm.style.display = "none";
  } else {
    loginForm.style.display = "none";
    registerForm.style.display = "block";
  }

  // Highlight the active button (optional)
  document.querySelectorAll(".form-toggle button").forEach((btn) => {
    btn.classList.remove("active");
  });
  document
    .querySelector(`.form-toggle button[onclick="showForm('${form}')"]`)
    .classList.add("active");
}
