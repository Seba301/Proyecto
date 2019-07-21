/**
 * Crea la tabla en la base de datos
 */
function crearTabla() {
    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
        }
    };
    request.open("GET", "crearTablaInventario.php", true);
    request.send();
}

/**
 * Obtiene los datos desde la base de datos
 */
function obtenerTareas() {
    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("tareas").innerHTML = "";
            document.getElementById("tareas").innerHTML = this.responseText;
        }
    };
    request.open("GET", "obtenerInventario.php", true);
    request.send();
}

/**
 * Crea una nueva tarea
 */
function crearTarea(event) {
    event.preventDefault();

    var nombre = document.forms["create"]["nombre"].value;
    var cantidad = document.forms["create"]["cantidad"].value;
    var precio_unitario = document.forms["create"]["precio_unitario"].value;

    if (nombre == "") {
        alert("El repuesto debe tener un nombre");
        return false;
    } else if (cantidad == "") {
        alert("El repuesto debe tener cantidad");
        return false;
    } else if (precio_unitario == "") {
        alert("El repuesto debe tener un precio unitario");
        return false;
    } else {
        var request = new XMLHttpRequest();
        request.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                obtenerTareas();
                document.forms["create"]["nombre"].value = "";
                document.forms["create"]["cantidad"].value = "";
                document.forms["create"]["precio_unitario"].value = "";
            }
        };
        request.open("POST", "crearInventario.php?nombre=" + nombre + "&cantidad=" + cantidad + "&precio_unitario=" + precio_unitario, true);
        request.send();

    }
}

/**
 * Editar una tarea
 */
function editarTarea(element) {
    var codigo = element.parentElement.parentElement.dataset.codigo;

    var nombre = document.forms["create"]["nombre"].value;
    var cantidad = document.forms["create"]["cantidad"].value;
    var precio_unitario = document.forms["create"]["precio_unitario"].value;

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            obtenerTareas();
            document.forms["create"]["nombre"].value = "";
                document.forms["create"]["cantidad"].value = "";
                document.forms["create"]["precio_unitario"].value = "";
        }
    };
    request.open("POST", "editarInventario.php?codigo=" + codigo + "&nombre=" + nombre + "&cantidad=" + cantidad + "&precio_unitario=" + precio_unitario, true);
        request.send();
}

/**
 * Eliminar una tarea 
 */
function eliminarTarea(element) {
    var codigo = element.parentElement.parentElement.dataset.codigo;

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            obtenerTareas();
        }
    };
    request.open("POST", "eliminarInventario.php?codigo=" + codigo, true);
    request.send();
}

//crearTabla();
obtenerTareas();
