// import custom header and footer
import { CustomHeader, CustomFooter } from "./custom.js";
// import validation function
import { validateForm } from './validation.js';
// import options functionality
import { changeContent } from './options.js';
// import slideshow functionality
// import { showNextItem, showPreviousItem, keyPress } from './slider.js';

//header and footer
document.addEventListener("DOMContentLoaded", function() {
    const header = new CustomHeader();
    const footer = new CustomFooter();

    const body = document.querySelector("body");

    body.insertBefore(header, body.firstChild);

    body.appendChild(footer);
});

// options functionality
document.addEventListener('DOMContentLoaded', function() {
    const options = document.querySelectorAll('.option');

    options.forEach(option => {
        option.addEventListener('click', function() {
            const optionType = this.dataset.option;
            changeContent(optionType);
        });
    });
});

//slideshow functionality

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
async function fetchWorkers() {
    const url = 'https://randomuser.me/api/?results=10';
    try {
        const response = await fetch(url);
        
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        const data = await response.json();
        return data.results;
    } catch (error) {
        console.error('Error fetching workers', error);
        return []; 
    }
}

fetchWorkers()
    .then(workers => {
        console.log(workers);
        populateWorkersUI(workers);
    })
    .catch(error => {
        console.error('Error:', error);
    });

function populateWorkersUI(workers) {
    const workersContent = document.querySelector('.workers-content');

    workers.forEach(worker => {
        const card = document.createElement('div');
        card.classList.add('workers-card');

        card.innerHTML = `
            <div class="card-img">
                <img src="${worker.picture.large}" alt="${worker.name.first} ${worker.name.last}">
            </div>
            <div class="card-text">
                <h3>${worker.name.first} ${worker.name.last}</h3>
                <p>${worker.email}</p>
                <span class="gradient-text">Since 2018</span>
                <button class="gradient-button">Hire</button>
            </div>
        `;

        workersContent.appendChild(card);
    });
}





