const navOpenButton = document.querySelector('#nav-open');
const navCloseButton = document.querySelector('#nav-close');
const navElement = document.querySelector('nav');

navOpenButton.addEventListener('click', function(){
    navElement.classList.remove('hide');
});

navCloseButton.addEventListener('click', function(){
    navElement.classList.add('hide');
});