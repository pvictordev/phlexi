// formValidation.js
export function validateForm(form) {
    const fullName = form.querySelector('#fullName').value.trim();
    const email = form.querySelector('#email').value.trim();
    const mobile = form.querySelector('#mobile').value.trim();
    const message = form.querySelector('#msg').value.trim();

    if (fullName === '') {
        alert('Please enter your full name');
        return false;
    }

    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (email === '' || !emailRegex.test(email)) {
        alert('Please enter a valid email address');
        return false;
    }

    if (mobile === '' || mobile.length > 10 || isNaN(mobile)) {
        alert('Please enter a valid 10-digit mobile number');
        return false;
    }

    if (message === '') {
        alert('Please enter your message');
        return false;
    }

    alert('Form submitted successfully!');
    return true;
}
