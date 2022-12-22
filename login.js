const loginforma = document.getElementsByClassName('login-form');

const registerforma = document.getElementsByClassName('register-form');

const switchForm = document.getElementById('link');

switchForm.addEventListener('click',function create(){
    loginforma.style.display = 'none';
    registerforma.style.display = 'block';
});