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
            $("#resultados").html(datos);
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
            $("#resultados").html(datos);
        }
    })
};