//import theme toggle
import "./features/themeToggle.js";

// import dropdown
import "./features/dropdown.js";

// contact form validation
function validateForm(form) {
    const fullName = form.querySelector("#fullName").value.trim();
    const email = form.querySelector("#email").value.trim();
    const mobile = form.querySelector("#mobile").value.trim();
    const message = form.querySelector("#msg").value.trim();
  
    if (fullName === "") {
      alert("Please enter your full name");
      return false;
    }
  
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (email === "" || !emailRegex.test(email)) {
      alert("Please enter a valid email address");
      return false;
    }
  
    if (mobile === "" || mobile.length > 10 || isNaN(mobile)) {
      alert("Please enter a valid 10-digit mobile number");
      return false;
    }
  
    if (message === "") {
      alert("Please enter your message");
      return false;
    }
  
    // Create a JSON object
    const formData = {
      fullName: fullName,
      email: email,
      mobile: mobile,
      message: message,
    };
  
    //console.log(formData);
    localStorage.setItem("formData", JSON.stringify(formData));
  
    alert("Form submitted successfully!");
    return true;
  }
  
  // counter for form submissions
  let count = localStorage.getItem("count")
    ? parseInt(localStorage.getItem("count"))
    : 0;
  
  const cnt = document.getElementById("counter");
  const form = document.getElementById("contact-form");
  
  // initialize counter
  cnt.innerHTML = count;
  
  if (form) {
    form.addEventListener("submit", function (e) {
      e.preventDefault();
  
      if (validateForm(form)) {
        fullName.value = "";
        email.value = "";
        mobile.value = "";
        msg.value = "";
        count++;
        cnt.innerHTML = count;
        // update local storage
        localStorage.setItem("count", count.toString());
      }
    });
}