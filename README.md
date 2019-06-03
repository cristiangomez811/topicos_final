# topicos_final Cristian Gomez 000294161 - Neider Carrillo 000292626

Este repositorio contiene el final de la materia: Topicos avanzados en bases de datos. Todo lo que se encuentra en este es ficticio y como tal puede ser descargado, editado y utilizado sin ninguna restricción.

### Información

**Nota de lectura:** Para este documeto usaré la notacion de *italic* para conceptos tecnicos y **bold** para consideraciones importantes.

Este proyecto esta desarrollado en el framework web de **PHP** - **Laravel** que permite persistir la base de datos en archivos los cuales son llamados *migrations*

--------

## Instalación 

### Preparación

Para correr este proyecto en local es necesario tener todos los **requisitos** que solicita **Laravel** <https://laravel.com/docs/5.8/installation#server-requirements> 

### Descarga de proyecto

Una vez solucionados todos los requisitos se clona este proyecto del repositorio. 

### Pasos iniciales antes de correr el proyecto

En una base de datos *MySQL* crea un esquema de nombre **FINAL_TOPICOS** y un usuario **final_topicos** con contraseña **final_topicos**. 

**Nota:** Estos datos son credenciales y se guardan todos en un archivo *.env* o *.env.algo*. En el servidor *MySQL* las politicas de contraseñas pueden evitar la creacion de este usuario, para saber mas del tema dejo la documentacion de estas politicas en *MySQL* <https://dev.mysql.com/doc/refman/5.7/en/validate-password-options-variables.html> 

### Correr el proyecto

+ **Base de datos:** Para montar el esquema de bases de datos con una **terminal en la carpeta del proyecto** se ejecuta *php artisan migrate*. (Recordar que las credenciales de Laravel estan en el .env)

+ **seeders** Los seeder se usan para cargar datos pre definidos en la base de datos, para ejecutarlos se usa *php composer.phar dump-autoload* para limpiar cache y luego *php artisan db:seed* para ejecutarlos. 

+ **correr servidor** Laravel es un servidor por tanto se debe iniciar para que fucione, se logra con *php artisan serve*

## Desarrollo 

Para llevar a cabo el proyecto y por falta de tiempo aunque en el esquema de base de datos se permite en el codigo el descuento por producto no se tiene en cuenta, además, todas las ventas se hacen hacia el perfil uno
