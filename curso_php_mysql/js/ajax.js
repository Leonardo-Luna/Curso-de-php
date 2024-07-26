const formulariosAjax = document.querySelectorAll(".FormularioAjax");

function enviarFormularioAjax(evento) {

    evento.preventDefault();

    let enviar = confirm("¿Desea enviar el formulario?");

    if(enviar) {

        let data = new FormData(this);
        let method = this.getAttribute("method");
        let action = this.getAttribute("action");
        let encabezados = new Headers();
        
        let config = {
            method: method,
            headers: encabezados,
            mode: "cors",
            cache: "no-cache",
            body: data
        };

        fetch(action, config)
            .then(respuesta => respuesta.text())
            .then(respuesta => {
                let contenedor = document.querySelector(".form-rest");
                contenedor.innerHTML = respuesta;
            });

    }

}

formulariosAjax.forEach(formularios => {
    formularios.addEventListener("submit", enviarFormularioAjax);
});