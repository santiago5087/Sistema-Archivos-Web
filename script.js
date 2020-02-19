function crear_archivo(ruta) {
    var nombre = document.getElementById("nombreArchivo").value;
    //var direccion = document.getElementById("direccion").value;
    var url = "comandos/crearArchivo.php";

    $.ajax({
        type:"post",
        url: url,
        data: {nombre: nombre, direccion: ruta},
        success:function(datos) {
            location.reload();
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
            location.reload();
        }
    })
};

function ver_permisos(ruta,nombre) {
    //var nombre = document.getElementById("nombrePermisos").value;
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

function copiar_pegar(ruta,nombre) {
    //var nombre = document.getElementById("nombreCopiar").value;
    var rutaPegar = document.getElementById("rutaPegar").value;
    //var direccion = document.getElementById("direccion").value;
    var url = "comandos/copiarPegar.php";

    $.ajax({
        type:"post",
        url: url,
        data: {nombre: nombre, rutaPegar: rutaPegar, direccion: ruta},
        success:function(datos) {
            location.reload();
        }
    })
};

function eliminar(ruta, nombre) {
    //var nombre = document.getElementById("nombreEliminar").value;
    //var direccion = document.getElementById("direccion").value;
    var url = "comandos/eliminarElemento.php";

    $.ajax({
        type:"post",
        url: url,
        data: {nombre: nombre, direccion: ruta},
        success:function(datos) {
            location.reload();
        }
    })
};

function ver_tabla(ruta,nombre) {
    //var nombre = document.getElementById("nombrePermisos").value;
    //var direccion = document.getElementById("direccion").value;
    var url = "comandos/verTabla.php";

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

function cambiar_nombre(ruta,nombre) {
    var nuevoNombre= document.getElementById("nuevoNombre").value;
    var url = "comandos/cambiarNombre.php";

    $.ajax({
        type:"post",
        url: url,
        data: {nombre: nombre, nuevoNombre: nuevoNombre, direccion: ruta},
        success:function(datos) {
            location.reload();
        }
    })
};

function mover(ruta,nombre) {
    //var nombre = document.getElementById("nombreCopiar").value;
    var rutaMover = document.getElementById("rutaMover").value;
    //var direccion = document.getElementById("direccion").value;
    var url = "comandos/mover.php";

    $.ajax({
        type:"post",
        url: url,
        data: {nombre: nombre, rutaMover: rutaMover, direccion: ruta},
        success:function(datos) {
            location.reload();
        }
    })
};

function cambiar_permisos(ruta, nombreElemento) {
    var c00 = document.getElementById("c00").checked;
    var c01 = document.getElementById("c01").checked;
    var c02 = document.getElementById("c02").checked;
    var c10 = document.getElementById("c10").checked;
    var c11 = document.getElementById("c11").checked;
    var c12 = document.getElementById("c12").checked;
    var c20 = document.getElementById("c20").checked;
    var c21 = document.getElementById("c21").checked;
    var c22 = document.getElementById("c22").checked;

    var valUs = 0;
    var valGr = 0;
    var valOth = 0;

    if (c00) {
        valUs += 4;
    }
    if (c01) {
        valUs += 2;
    }
    if (c02) {
        valUs += 1;
    }
    if (c10) {
        valGr += 4;
    }
    if (c11) {
        valGr += 2;
    }
    if (c12) {
        valGr += 1;
    }
    if (c20) {
        valOth += 4;
    }
    if (c21) {
        valOth += 2;
    }
    if (c22) {
        valOth += 1;
    }

    var url = "comandos/cambiarPermisos.php";
    
    $.ajax({
        type:"post",
        url: url,
        data: {nombreE: nombreElemento, us: valUs, gr: valGr, oth: valOth , direccion: ruta},
        success:function(datos) {
            location.reload();
        }
    })
};

function cambiar_propietario(ruta, nombreElemento) {
    var nombrePropietario = document.getElementById("nombreUser").value;
    
    var url = "comandos/cambiarPropietario.php";

    $.ajax({
        type:"post",
        url: url,
        data: {nombreE: nombreElemento, nombreP: nombrePropietario, direccion: ruta},
        success:function(datos) {
            location.reload();
        }
    })
};