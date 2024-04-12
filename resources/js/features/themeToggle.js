// theme toggle
document.addEventListener("DOMContentLoaded", function () {
  // toggle buttons
  let dark = document.getElementById("dark-theme");
  let light = document.getElementById("light-theme");

  // load theme from localstorage
  const savedTheme = localStorage.getItem("theme");
  if (savedTheme === "dark") {
    document.body.classList.add("dark-theme");
  }

  //header toggle

  dark.addEventListener("click", function () {
    if (document.body.classList.contains("dark-theme")) {
      document.body.classList.remove("dark-theme");
    } else {
      document.body.classList.add("dark-theme");
      localStorage.setItem("theme", "dark");
    }
  });

  light.addEventListener("click", function () {
    if (document.body.classList.contains("dark-theme")) {
      document.body.classList.remove("dark-theme");
      localStorage.removeItem("theme", "dark");
    }
  });
});
