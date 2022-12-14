const btnMenu = document.getElementById('topBarButtonMenu');
const _fade = document.querySelector('.menu__movil__fade');
const _menu = document.querySelector('.menu__movil');

btnMenu.addEventListener('click', () => {
    _menu.classList.toggle('__show');
    _fade.classList.toggle('__show');
    document.body.style.overflowY = 'hidden';
});

_fade.addEventListener('click', () => {
    _menu.classList.toggle('__show');
    _fade.classList.toggle('__show');
    document.body.style.overflowY = 'auto';
});