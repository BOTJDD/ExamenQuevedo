document.addEventListener('DOMContentLoaded', function(){
    eventListeners();
    darkMode();
});
function darkMode(){
    const prefiereDarkMode = window.matchMedia('(prefers-color-scheme: dark)'); //Cambiar tema a base del sistema operativo
    if(prefiereDarkMode.matches){
        document.body.classList.add('dark-mode');
    }else{
        document.body.classList.remove('dark-mode');
    }
    prefiereDarkMode.addEventListener('change', function(){ //cambiar tema a base del sistema de la opcion automatica
        if(prefiereDarkMode.matches){
            document.body.classList.add('dark-mode');
        }else{
            document.body.classList.remove('dark-mode');
        }        
    });
    const botonDarkMode = document.querySelector('.dark-mode-boton');   //boton para cambiar el tema de la pagina
    botonDarkMode.addEventListener('click', function(){
        document.body.classList.toggle('dark-mode');
    });
}
function eventListeners(){
    const mobileMenu= document.querySelector('.mobile-menu');
    mobileMenu.addEventListener('click', navegacionResposive);
}
function navegacionResposive(){
    const navegacion = document.querySelector('.navegacion');
    navegacion.classList.toggle('mostrar');
}





$(document).ready(function() {
    // Mostrar la primera imagen al cargar la página
    $('.imagen-fondo:first-child').addClass('visible');

    // Función para cambiar la imagen cada cierto tiempo
    function cambiarImagen() {
        var imagenes = $('.imagen-fondo');
        var imagenVisible = $('.imagen-fondo.visible');
        var siguienteImagen = imagenVisible.next('.imagen-fondo');

        if (siguienteImagen.length === 0) {
            siguienteImagen = imagenes.first();
        }

        imagenVisible.removeClass('visible');
        siguienteImagen.addClass('visible');
    }

    // Cambiar la imagen cada 5 segundos (5000 milisegundos)
    setInterval(cambiarImagen, 5000);

    // Redireccionar al hacer clic en la imagen
    $('.imagen-fondo').on('click', function() {
        var link = $(this).data('link');
        if (link) {
            window.location.href = link;
        }
    });
});
