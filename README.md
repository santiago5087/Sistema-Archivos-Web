# Sistema de Archivos Web

## Sobre el Proyecto
**Institución:** Universidad Nacional de Colombia - Sede Medellín

**Materia:** Sistemas Operativos

**Equipo:** Edhy Santiago Marín Arbeláez - Daniel Espinal Mosquera

**Herramientas:** HTML, CSS, Javascript, PHP, Apache


## Instrucciones
**1.** Instalar apache desde la MV de linux con los siguientes comandos: 
- sudo apt install apache2
- sudo apt install php libapache2-mod-php

**2.**  Clonar el repositorio en la carpeta /var/www/html y otorgarle permisos:
- sudo git clone https://github.com/santiago5087/Sistema-Archivos-Web.git
- sudo chmod 777 /var/www

**3.** Iniciar apache:
- sudo service apache2 start

**4.** Desde el navegador de la MV ingresar a localhost/Sistema-Archivos-Web/directorio.php, con el cual el servidor ejecuta el proyecto. 
Para acceder al proyecto desde otra maquina, configurar la red en modo host only o puente, y desde el navegador ingresar la ip de la MV:
http://"ip"/Sistema-Archivos-Web/directorio.php

**Uso**
- Para devolverse un nivel en el gestor de archivos, presionar ..
- Para devolserse a la carpeta raíz, presionar .
- Para pegar o mover el fichero a un nivel superior, ingresar en la ruta: ../
