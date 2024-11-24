function togglePassword() {
        let passwordField = document.getElementById('password');
        let eyeIcon = document.getElementById('toggle');

        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            eyeIcon.innerHTML = '&#128064;';

        } else {
            passwordField.type = 'password';
            eyeIcon.innerHTML = '&#128065;';
        }
    }
    // cool