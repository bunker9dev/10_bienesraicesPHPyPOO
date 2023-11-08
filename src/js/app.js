document.addEventListener('DOMContentLoaded', function(){
    eventListeners();
});

function eventListeners () {
    const mobilMenu = document.querySelector('.mobileMenu');
    mobilMenu.addEventListener('click', navegacionResponsive);
}
function navegacionResponsive (){
    const navegacion = document.querySelector('.navegacion');
    navegacion.classList.toggle('mostrar')
}