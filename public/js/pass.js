const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#password');

togglePassword.addEventListener('click', function(e) {
    // toggle the "type" attribute of the password input field
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the icon between the "eye" and "eye-slash" icons
    this.classList.toggle('bi-eye');
    this.classList.toggle('bi-eye-slash');
});