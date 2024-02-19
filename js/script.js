// import custom header and footer
import { CustomHeader, CustomFooter } from "./custom.js";
// import validation function
import { validateForm } from './validation.js';
// import slideshow functionality
import { changeContent } from './slideshow.js';

//header and footer
document.addEventListener("DOMContentLoaded", function() {
    const header = new CustomHeader();
    const footer = new CustomFooter();

    const body = document.querySelector("body");

    body.insertBefore(header, body.firstChild);

    body.appendChild(footer);
});

// slideshow functionality
document.addEventListener('DOMContentLoaded', function() {
    const options = document.querySelectorAll('.option');

    options.forEach(option => {
        option.addEventListener('click', function() {
            const optionType = this.dataset.option;
            changeContent(optionType);
        });
    });
});

//validate form
const form = document.getElementById('contact-form');
if(form) {
    form.addEventListener('submit', function(event) {
        event.preventDefault();

        if (validateForm(form)) {
            form.submit();
        }
    });
}

//fetch workers data

fetchWorkers();

async function fetchWorkers() {

    const url = 'https://jsonplaceholder.typicode.com/users';
    try {
        const response = await fetch(url);
        
        if(!response.ok) {
            throw new Error('Network response was not ok');
        }
        const data = await response.json();
        console.log(data);
    }
    catch (error) {
        console.error('Error fetching workers', error);
    }
    
}



