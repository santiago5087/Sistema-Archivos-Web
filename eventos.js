var menuArch = document.querySelectorAll(".menu-arch");
var menuDir = document.querySelector(".menu-dir");
var matriz = document.getElementById("matriz");

menuArch.forEach(element => {
    element.addEventListener('change', (event) => {
        if (event.target.checked) {
            $('#matriz').empty();
            var panel = document.createElement("div");
            panel.innerHTML = '<h3 class="green-text">Panel de un archivo</h3>';
            matriz.appendChild(panel);
        } else {
            $('#matriz').empty();
        }
    });
});

menuDir.addEventListener('change', (event) => {
    if (event.target.checked) {
        $('#matriz').empty();
        var panel = document.createElement("div");
        panel.innerHTML = '<h3 class="red-text">Panel de un directorio"</h3>';
        matriz.appendChild(panel);
    } else {
        $('#matriz').empty();
    }
});
