// reusable custom components
import { CustomHeader, CustomFooter } from "./custom.js";

//validate form
const form = document.getElementById('contact-form');

form.addEventListener('submit', function(event) {
    event.preventDefault();

    // Get form values
    const fullName = document.getElementById('fullName').value.trim();
    const email = document.getElementById('email').value.trim();
    const mobile = document.getElementById('mobile').value.trim();
    const message = document.getElementById('msg').value.trim();


    // Validation
    if (fullName === '') {
        alert('Please enter a username');
        return;
    }

    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (email === '' || !emailRegex.test(email)) {
        alert('Please enter a valid email address');
        return;
    }
    
    if(mobile === '' || mobile.length > 10 || isNaN(mobile)){
        alert('Please enter a valid mobile number');
        return;
    }

    if (message === '') {
        alert('Please enter a message');
        return;
    }
    
    alert('Form submitted successfully!');
    form.submit();
});

