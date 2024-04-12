// dropdown
document.addEventListener("DOMContentLoaded", function () {
  // dropdown
  var dropdownToggle = document.querySelectorAll(".dropdown-toggle");

  for (let i = 0; i < dropdownToggle.length; i++) {
    dropdownToggle[i].addEventListener("click", function () {
      let dropdownMenu = this.nextElementSibling;

      if (dropdownMenu.classList.contains("show")) {
        dropdownMenu.classList.remove("show");
      } else {
        dropdownMenu.classList.add("show");
      }

      document.body.addEventListener("click", function (e) {
        if (e.target !== dropdownToggle[i] && e.target !== dropdownMenu) {
          dropdownMenu.classList.remove("show");
        }
      });
    });
  }
});
