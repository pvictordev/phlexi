// view the passoword
// Define togglePassword function outside of the DOMContentLoaded event listener
function togglePassword() {
    let passwordInput = document.getElementById("password");
    let button = document.getElementById("togglePassword");

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        button.textContent = "Hide";
    } else {
        passwordInput.type = "password";
        button.textContent = "Show";
    }
}

// Attach the togglePassword function to the button's onclick event
let button = document.getElementById("togglePassword");
button.addEventListener("click", togglePassword);

