//import custom.js
import "./features/custom.js";

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
    console.log(workers)

export function populateWorkersUI(workers) {
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
