var menuArch = document.querySelectorAll(".menu-arch");
var menuDir = document.querySelectorAll(".menu-dir");
var matriz = document.getElementById("matriz");

menuArch.forEach(element => {
    element.addEventListener('change', (event) => {
        if (event.target.checked) {
            $('#matriz').empty();
            var panel = document.createElement("div");
            panel.innerHTML = `
            <table>
                <tbody>
                    <tr>
                        <td> <a class="waves-effect waves-light btn-small">Crear archivo</a> </td>
                        <td> <a class="waves-effect waves-light btn-small">Cambiar nombre</a> </td>
                    </tr>
                    <tr>
                        <td> <a class="waves-effect waves-light btn-small">Copiar</a> <a class="waves-effect waves-light btn-small">Pegar</a> </td>
                        <td> <a class="waves-effect waves-light btn-small">Ver info. permisos</a> </td>
                    </tr>
                    <tr>
                    <td> <a class="waves-effect waves-light btn">Cambiar permisos de acceso </a> </td>
                    <td> <a class="waves-effect waves-light btn-small">Cambiar propietario</a> </td>
                    </tr>
                    <tr>
                    <td> <a class="waves-effect waves-light btn-small">Mover</a> <a class="waves-effect waves-light btn-small">Cortar</a> <a class="waves-effect waves-light btn-small">Eliminar</a> </td>
                    </tr>
                </tbody>
            </table>    
            `;
            matriz.appendChild(panel);
        } else {
            $('#matriz').empty();
        }
    });
});

menuDir.forEach(element => {
    element.addEventListener('change', (event) => {
        if (event.target.checked) {
            $('#matriz').empty();
            var panel = document.createElement("div");
            panel.innerHTML = `
            <table>
                <tbody>
                    <tr>
                        <td> <a class="waves-effect waves-light btn-small">Crear directorio</a> </td>
                        <td> <a class="waves-effect waves-light btn-small">Cambiar nombre</a> </td>
                    </tr>
                    <tr>
                        <td> <a class="waves-effect waves-light btn-small">Copiar</a> <a class="waves-effect waves-light btn-small">Pegar</a> </td>
                        <td> <a class="waves-effect waves-light btn-small">Ver info. permisos</a> </td>
                    </tr>
                    <tr>
                    <td> <a class="waves-effect waves-light btn">Cambiar permisos de acceso </a> </td>
                    <td> <a class="waves-effect waves-light btn-small">Cambiar propietario</a> </td>
                    </tr>
                    <tr>
                    <td> <a class="waves-effect waves-light btn-small">Mover</a> <a class="waves-effect waves-light btn-small">Cortar</a> <a class="waves-effect waves-light btn-small">Eliminar</a> </td>
                    </tr>
                </tbody>
            </table>    
            `;
            matriz.appendChild(panel);
        } else {
            $('#matriz').empty();
        }
    })
});
