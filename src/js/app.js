document.addEventListener('DOMContentLoaded', function(){
    eventListeners();

    darkMode();
});

function darkMode() {
    // Comprueba si estaba habilidado dark mode
    let darkLocal = window.localStorage.getItem('dark');
    if(darkLocal === 'true') {
        document.body.classList.add('dark-mode');
    }
    // Añadimos el evento de click al botón de dark mode
    document.querySelector('.dark-mode-boton').addEventListener('click', darkChange);
}
 
function darkChange() {
    let darkLocal = window.localStorage.getItem('dark');
 
    if(darkLocal === null || darkLocal === 'false') {
        // No está inicializado darkLocal o es falso
        window.localStorage.setItem('dark', true);
        document.body.classList.add('dark-mode');
    } else {
        // Está activado darkMode, por lo que se desactiva
        window.localStorage.setItem('dark', false);
        document.body.classList.remove('dark-mode');
    }
}

function eventListeners(){
    const mobileMenu = document.querySelector('.mobile-menu');

    mobileMenu.addEventListener('click', navegacionResponsive);

    //Muestra campos condicionales
    const metedoContacto = document.querySelectorAll('input[name="contacto[contacto]"]');

    metedoContacto.forEach(input => input.addEventListener('click', mostrarMetodosContacto));
}


/* Funcion responsiva */
function navegacionResponsive(){
    const navegacion = document.querySelector('.navegacion');

    if(navegacion.classList.contains('mostrar')){
        navegacion.classList.remove('mostrar');
    }else{
        navegacion.classList.add('mostrar');
    }
}

function mostrarMetodosContacto(e){
    const contactoDiv = document.querySelector('#contacto');

    if(e.target.value === 'telefono'){
        contactoDiv.innerHTML = `
            <label for="telefono">Número telefónico</label>
            <input type="tel" placeholder="Tu Teléfono" id="telefono" name="contacto[telefono]">

            <p>Elija la fecha y la hora para realizarle la llamada</p>

			<label for="fecha">Fecha:</label>
			<input type="date" id="fecha" name="contacto[fecha]">

			<label for="hora">Hora:</label>
			<input type="time" id="hora" min="09:00" max="06:00 PM" name="contacto[hora]">
        `;
    }else{
        contactoDiv.innerHTML = `
            <label for="email">E-mail</label>
            <input type="email" placeholder="Tu Email" id="email" name="contacto[email]" required>
        `;
    }

}