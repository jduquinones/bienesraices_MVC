document.addEventListener('DOMContentLoaded', function() {

    eventListeners();
    darkMode();

});

// Funcion para el boton de dark-mode (cambio de tema, oscuro o claro)

function darkMode() {

    const prefiereDarkMode = window.matchMedia(('prefers-color-schema: dark'));
    
    if (prefiereDarkMode.matches) {        
        document.body.classList.add('dark-mode');
    }else {
        document.body.classList.remove('dark-mode');
    }

    
    prefiereDarkMode.addEventListener('change', function() {
        if (prefiereDarkMode.matches) {        
            document.body.classList.add('dark-mode');
        }else {
            document.body.classList.remove('dark-mode');
        }
    });    

    const botonDarkMode = document.querySelector('.dark-mode-boton');

    botonDarkMode.addEventListener('click', function() {
        document.body.classList.toggle('dark-mode')
    })
}

// Funcio para el boton de menu en modo mobile

function eventListeners(){
    const mobileMenu = document.querySelector('.mobile-menu');

    mobileMenu.addEventListener('click', navegacionResponsive);    
}

function navegacionResponsive(){
    const navegacion = document.querySelector('.navegacion');
    
    navegacion.classList.toggle('mostrar'); // hace los mismo que el if que esta abajo

    // if(navegacion.classList.contains('mostrar')) {        
    //     navegacion.classList.remove('mostrar');
    // }else {
    //     navegacion.classList.add('mostrar');
    // }
}


