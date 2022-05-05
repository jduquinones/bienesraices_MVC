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
    
    // Muestra campos condicionales
    const metodoContacto = document.querySelectorAll('input[name="contacto[contacto]"]');
    // La funcion y el forEach nos quita el error al pasar varios elementos al evento listener
   
    metodoContacto.forEach(input => input.addEventListener('click', mostrarMetodosContacto));
}

function navegacionResponsive(){
    const navegacion = document.querySelector('.navegacion');
    
    navegacion.classList.toggle('mostrar');
}

function mostrarMetodosContacto(e){
    const contactoDiv = document.querySelector('#contacto');

    if (e.target.value === 'telefono') {
        contactoDiv.innerHTML = `
        <label for="telefono">Numero Telefono</label>
        <input type="tel" placeholder="Tu Telefono" name="contacto[telefono]" id="telefono" require>

        <p>Elija la fecha y la hora para la llamada</p>

            <label for="fecha">Fecha:</label>
            <input type="date" name="contacto[fecha]" id="fecha">

            <label for="hora">Hora:</label>
            <input type="time" name="contacto[hora]" id="hora" min="09:00" max="18:00">
        `;
    }else{
        contactoDiv.innerHTML = `
        <label for="email">E-mail</label>
        <input type="email" placeholder="Tu Correo electronico" name="contacto[email]" id="email" require>
        `;
    }
}
