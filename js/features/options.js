export function changeContent(option) {
    const benefitsCard = document.getElementById('benefits-card');
    const paragraph = benefitsCard.querySelector('p');
    const icon = benefitsCard.querySelector('.benefits-icon');

    switch (option) {
        case 'quality':
            paragraph.textContent = 'There are more than 100,000 workers registered here at Phlexi, so you would be able to find the most qualitative one.';
            icon.src = '/images/quality.svg';
            break;
        case 'security':
            paragraph.textContent = 'Your security is our top priority. We employ the latest encryption techniques to keep your information safe.';
            icon.src = '/images/security.svg';
            break;
        case 'care':
            paragraph.textContent = 'We deeply care about our customers. Our dedicated support team is available 24/7 to assist you.';
            icon.src = '/images/care.svg';
            break;
        default:
            break;
    }    
    
    // Remove active-option
    const options = document.querySelectorAll('.option');
    options.forEach(option => {
        option.classList.remove('active-option');
        option.classList.remove('gradient-text');
    });

    // Apply active-option
    const clickedOption = document.querySelector(`.option[data-option="${option}"]`);
    clickedOption.classList.add('active-option');
    clickedOption.classList.add('gradient-text');

};

document.addEventListener('DOMContentLoaded', function() {
    const options = document.querySelectorAll('.option');

    options.forEach(option => {
        option.addEventListener('click', function() {
            const optionType = this.dataset.option;
            changeContent(optionType);
        });
    });
});