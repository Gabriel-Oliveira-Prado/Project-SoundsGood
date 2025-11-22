document.addEventListener('DOMContentLoaded', function() {
    const switchToRegister = document.getElementById('switchToRegister');
    const switchToLogin = document.getElementById('switchToLogin');
    
    const loginForm = document.getElementById('loginForm');
    const registerForm = document.getElementById('registerForm');
    
    const loginContainer = document.querySelector('.login-container');
    const animationSection = document.getElementById('animationSection');
    const formSection = document.getElementById('formSection');

    const transitionSpeed = 600;

    function switchForms(showForm, hideForm) {
        hideForm.style.animation = 'formSlideOut 0.4s ease-out forwards';

        setTimeout(() => {
            hideForm.classList.add('hidden');
            showForm.classList.remove('hidden');
            showForm.style.animation = 'formSlideIn 0.5s ease-out forwards';
        }, 400);
    }

    function switchLayout(isRegistering) {
        if (isRegistering) {
            animationSection.classList.add('slide-out-left');
            formSection.classList.add('slide-out-right');
            
            setTimeout(() => {
                loginContainer.classList.add('swapped');
                animationSection.classList.remove('slide-out-left');
                formSection.classList.remove('slide-out-right');
            }, transitionSpeed);

        } else {
            loginContainer.classList.remove('swapped');
        }
    }

    switchToRegister.addEventListener('click', (e) => {
        e.preventDefault();
        switchForms(registerForm, loginForm);
        switchLayout(true);
    });

    switchToLogin.addEventListener('click', (e) => {
        e.preventDefault();
        switchForms(loginForm, registerForm);
        switchLayout(false);
    });
});