// import custom header and footer
import { CustomHeader, CustomFooter } from "./custom.js";
// import validation function
import { validateForm } from './validation.js';

//validate form
const form = document.getElementById('contact-form');
form.addEventListener('submit', function(event) {
    event.preventDefault();

    if (validateForm(form)) {
        form.submit();
    }
});


