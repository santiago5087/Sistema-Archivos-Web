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

function mover(ruta) {
    var nombre = document.getElementById("nombreCortar").value;
    var rutaPegar = document.getElementById("rutaMover").value;
    //var direccion = document.getElementById("direccion").value;
    var url = "comandos/cortarMover.php";

    $.ajax({
        type:"post",
        url: url,
        data: {nombre: nombre, rutaPegar: rutaPegar, direccion: ruta},
        success:function(datos) {
            window.alert("Elemento movido! recargar la página.")
        }
    })
};

function cambiar_nombre(ruta) {
    var nombreViejo = document.getElementById("nombreViejo").value;
    var nombreNuevo = document.getElementById("nombreNuevo").value;
    //var direccion = document.getElementById("direccion").value;
    var url = "comandos/cambiarNombre.php";

    $.ajax({
        type:"post",
        url: url,
        data: {nombreV: nombreViejo, nombreN: nombreNuevo, direccion: ruta},
        success:function(datos) {
            window.alert("Se ha cambiado el nombre con éxito! recargar la página.")
        }
    })
};

function cambiar_propietario(ruta) {
    var nombreElemento = document.getElementById("nombreElU").value;
    var nombrePropietario = document.getElementById("nombreUser").value;
    //var direccion = document.getElementById("direccion").value;
    var url = "comandos/cambiarPropietario.php";

    $.ajax({
        type:"post",
        url: url,
        data: {nombreE: nombreElemento, nombreP: nombrePropietario, direccion: ruta},
        success:function(datos) {
            window.alert("Se ha cambiado el propietario con éxito! recargar la página.")
        }
    })
};

function cambiar_permisos(ruta) {
    var nombreElemento = document.getElementById("elementoProp").value;

    var us = 0;

    if ( $("#c00").attr('checked') ) {
        us += 1;
    }

    if ( $("#c01").attr('checked') ) {
        us += 1;
    }

    if ( $("#c02").attr('checked') ) {
        us += 1;
    }

    window.alert(us);
    var celda00 = document.getElementById("c01");
    var celda00 = document.getElementById("c02");
    var url = "comandos/cambiarPermisos";

    $.ajax({
        type:"post",
        url: url,
        data: {nombreE: nombreElemento, nombreP: nombrePropietario, direccion: ruta},
        success:function(datos) {
            window.alert("Se ha cambiado el propietario con éxito! recargar la página.")
        }
    })
}