const formulariosAjax = document.querySelectorAll(".FormularioAjax");
// Carga formulariosAjax con todos los formularios bajo la clase "FormularioAjax"

function enviarFormularioAjax(evento) {

    evento.preventDefault();
    // Previene el comportamiento default del formulario (enviar info y recargar la página)

    let enviar = confirm("¿Desea subir este archivo?");

    if(enviar) {

        let data = new FormData(this);
        // Crea un nuevo FormData (array) con los datos del arreglo sobre el que se está trabajando

        let method = this.getAttribute("method");
        // Trae el método del formulario, en este caso es POST

        let action = this.getAttribute("action");
        // Trae el redireccionamiento del formulario (campo action)

        let encabezados = new Headers();
        let config = {
            method: method,
            headers: encabezados,
            mode: "cors",
            cache: "no-cache",
            body: data
        };

        fetch(action, config) // Envía los datos usando la API Fetch
            .then(respuesta => respuesta.text())
            .then(respuesta => {
                alert(respuesta);
            });

    }

}

formulariosAjax.forEach(formularios => {

    formularios.addEventListener("submit", enviarFormularioAjax);
    // "Escucha" al evento "submit", que es el botón de envío

});