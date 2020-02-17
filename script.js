function crear_archivo(ruta) {
    var nombre = document.getElementById("nombreArchivo").value;
    //var direccion = document.getElementById("direccion").value;
    var url = "comandos/crearArchivo.php";

    $.ajax({
        type:"post",
        url: url,
        data: {nombre: nombre, direccion: ruta},
        success:function(datos) {
            window.alert("Archivo creado con exito! recargar la página.");
        }
    })
};

function crear_directorio(ruta) {
    var nombre = document.getElementById("nombreDirectorio").value;
    //var direccion = document.getElementById("direccion").value;
    var url = "comandos/crearDirectorio.php";

    $.ajax({
        type:"post",
        url: url,
        data: {nombre: nombre, direccion: ruta},
        success:function(datos) {
            window.alert("Directorio creado con exito! recargar la página.");
        }
    })
};

function ver_permisos(ruta) {
    var nombre = document.getElementById("nombrePermisos").value;
    //var direccion = document.getElementById("direccion").value;
    var url = "comandos/verPermisos.php";

    $.ajax({
        type:"post",
        url: url,
        data: {nombre: nombre, direccion: ruta},
        success:function(datos) {
            $('#matriz').empty();
            $('#matriz').html(datos);
        }
    })
};

function copiar_pegar(ruta) {
    var nombre = document.getElementById("nombreCopiar").value;
    var rutaPegar = document.getElementById("rutaPegar").value;
    //var direccion = document.getElementById("direccion").value;
    var url = "comandos/copiarPegar.php";

    $.ajax({
        type:"post",
        url: url,
        data: {nombre: nombre, rutaPegar: rutaPegar, direccion: ruta},
        success:function(datos) {
            window.alert("Elemento pegado! recargar la página.")
        }
    })
};

function eliminar(ruta) {
    var nombre = document.getElementById("nombreEliminar").value;
    //var direccion = document.getElementById("direccion").value;
    var url = "comandos/eliminarElemento.php";

    $.ajax({
        type:"post",
        url: url,
        data: {nombre: nombre, direccion: ruta},
        success:function(datos) {
            window.alert("Elemento eliminado con exito! recargar la página.");
        }
    })
};