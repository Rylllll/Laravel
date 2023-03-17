const form = document.getElementById('loginForm');

form.addEventListener('submit', function(event) {
    event.preventDefault();

    $.ajax({
        type: "POST",
        url: "function.php",
        data: $("#loginForm").serialize(),
        success: function(response) {
            var result = JSON.parse(response);
            if (result.success) {
                window.location.href = 'index.html';
                form.reset();
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Invalid username or password.',
                });
                form.reset();
            }
        }
    });
});

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