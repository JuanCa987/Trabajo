<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# INTRODUCCIÓN

Este proyecto fue creado por la necesidad que tiene una institución en concreto, Se creó un aplicativo, en este caso proyecto Academia. La idea nació de la misma necesidad, registrar todo lo relacionado con la institución, es necesario porque no se cuenta con un programa que permite hacer tales funciones. El sistema no es cómoda visualmente, por el momento no es adecuado para el usuario

Este sistema cuenta con módulos necesarios para la creación de cursos, docentes y estudiantes, así como también una sección donde se habla detalladamente sobre la fundación, visión, misión y objetivos de la institución. El proyecto se basa sobre el lenguaje de programación PhP, además,  utilizando el framework Laravel el cual está muy vinculado con PhP. Se utilizó un gestor de base de datos y un sistemas de control de versiones.


# OBJETIVOS
Los objetivos que tiene este documento técnico del proyecto Academia son los siguientes:
Crear un curso en específico para la academia, organizar dichos cursos para tener constancia de que existen.
Elaborar una sección donde se pueda agregar un docente a la academia, además que esté relacionado con los cursos creados.
Gestionar todos los datos de los estudiante, docentes y cursos creados por el sistema, tener un historial de todo lo relacionado con el proyecto academia.

# ALCANCE
El proyecto Academia tiene las siguientes limitaciones:
El documento está dirigido a programadores en general, deben tener conocimientos sobre laravel, entre otras extensiones necesarias, como también dirigido a personal de la empresa de desarrollo o personal autorizado del SENA, instructores de ADSI y aprendices de otras fichas.
El sistema del proyecto Academia está dirigido a una institución en especial, surgió de una necesidad o falla que tenía dicha institución .
El software se trabajó solo por el lado backend, utilizando como lenguaje de programación PHP y framework Laravel, el proyecto avanzó de manera ágil y eficiente, se construyeron las base de datos, migraciones, modelos y CRUM necesarios para este proyecto, así como, GitHub para el repositorio del proyecto y el control de versiones.

El sistema fue probado en servidores locales, permite crear un curso, descripción y duración. además, se registra un docente y estudiante, guardando todo los datos necesarios para que sean validados en la base de datos.
El sistema puede organizar los datos para que se puedan actualizar si es necesario, como también eliminar si es el caso.
Los datos ingresados deben ser válidos para que se pueda continuar con el registro o creación.
El sistema aún no permite que los usuarios se registren o inicien sesión, no contiene un módulo de gestión de usuarios.
En esta fase del proyecto no se ha desarrollado aún un Frontend. Se ha trabajado únicamente en el backend de la aplicación, en una versión no terminada. Los módulos que se han trabajado son los de curso,docente y estudiantes. Por tanto este manual solo aplica al backend.


Este documento es aplicable a la versión 1.0 del programa desarrollado por la ficha 2341240..

# USUARIOS
Usuarios del software, descripción natural de las personas que usarán el sistema para contextualizar sobre el personal de la empresa cliente. 
Se debe aclarar que, en esta fase del proyecto, no se han completado los roles de usuario, privilegios administrativos.
De acuerdo al documento de requisitos, los usuarios que tendrá este aplicativo son:
Estudiantes: son las personas que desean estudiar en la institución, los cuales se pueden registrar llenado los campos requeridos y que son necesarios para continuar con el registro.
Coordinadores: Son usuarios que tendrán un rol especial en el aplicativo ya que podrán disponer de las siguientes opciones: editar la información de cada estudiante, así como de los cursos y docentes.
Usuario Administrador: Corresponde a administradores del sistema que se encarga de hacer el respectivo mantenimiento, actualizaciones, creación de nuevos módulos, nuevas funcionalidades en el código del programa.

# HERRAMIENTAS UTILIZADAS EN EL DESARROLLO

** Visual Studio Code**
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/1.png?raw=true)

Es un IDE desarrollado. Se utilizó la versión 1.71 cuya descarga se obtuvo de https://code.visualstudio.com/
- Plugins instalados:
- Bootstrap Snippets
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/2.png?raw=true)
- Laravel extensión Pack: incluye: Laravel Blade, laravel snippets
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/3.png?raw=true)
**Framework Laravel**
En la instalación se indicó que el ejecutable de php se encuentra en la carpeta de XAMPP, en la ruta: C:\xampp\php

**Composer:**
Es un IDE de desarrollo creado por Nils Adermann, Jordi Boggiano La versión que se utilizó fue 2.4.2  y se descargó de https://getcomposer.org/download/ .

**Git Bash:**
Es un IDE de desarrollo creado por Linus Torvalds La versión que se utilizó fue 3.3.0  y se descargó de https://git-scm.com/downloads .

**Xampp:**
Es un IDE de desarrollo creado por Baiker y Anthony Corporation La versión que se utilizó fue 3.3.0  y se descargó de https://www.apachefriends.org/es/download.html .

# METODOLOGÍA DE PROYECTO

** SCRUM**
Para el desarrollo de este proyecto de software se utilizó la metodología CRUM, la cual consiste en un proceso en el que se aplican de manera regular un conjunto de buenas prácticas para trabajar colaborativamente, en equipo y obtener el mejor resultado posible de proyectos.
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/4.png?raw=true)

**6.2 CASCADA**

El modelo en cascada o waterfall model, es la propuesta de un enfoque metodológico que consiste en ordenar de forma lineal las distintas etapas que debes de seguir al momento de desarrollar

# REQUISITOS TÉCNICOS PARA DESARROLLAR EL SISTEMA
Para el correcto desarrollo del proyecto se usaron 2 Computadores con las siguientes características:
RAM: 64,0 GB
Disco Duro: 
Procesador: Intel(R) Xeon(R) W-10855M CPU @2.80GHz 2.81 GHz
Pantalla: intel(R) UHD Graphics P630

Para lo servidores de prueba se crearon locales del sistemas
Ancho banda del internet

# REQUISITOS TÉCNICOS PARA LA EJECUCIÓN DEL SISTEMA

La página web con todas sus funcionalidades, se podrá acceder desde cualquier computador que tenga mínimo estas características:
Procesador: Intel R Core (i3)
RAM: 4 GB
Disco duro: HDD 230 GB
Se ha probado que el sistema funciona correctamente en los siguientes navegadores:
Google Chrome en su última versión
Mozilla Firefox en su ultima versión
Opera en su ultima versión
Microsoft Edge

# REGLAS DE NEGOCIO
**Ley de Protección de Datos Personales o Ley 1581 de 2012**
Reconoce y protege el derecho que tienen todas las personas a conocer, actualizar y rectificar las informaciones que se hayan recogido sobre ellas en bases de datos o archivos que sean susceptibles de tratamiento por entidades de naturaleza pública o privada.

**LEY 30 DE 1992 (Diciembre 28)**
ARTÍCULO 1. La Educación Superior es un proceso permanente que posibilita el desarrollo de las potencialidades del ser humano de una manera integral, se realiza con posterioridad a la educación media o secundaria y tiene por objeto el pleno desarrollo de los alumnos y su formación académica o profesional.

# DETALLES DE DISTRIBUCIÓN DE CARPETAS Y ARCHIVOS

**Distribución de carpetas en el backend**

1.1.2. Controladores de recursos
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/5.png?raw=true)

Dentro de Http tenemos la carpeta Controllers, donde a su vez tenemos los siguientes controladores que son de recursos:

**CursosController.php:** Se encarga de manejar toda la lógica para la tabla Cursos del sistema, donde se programan las acciones de crear nuevo ítem, editar ítem, mostrar ítem seleccionado y eliminar el ítem seleccionado.

**DocentesController.php:** Se encarga de manejar toda la lógica de la tabla Docentes del sistema, donde se hacen las acciones de crear, editar, mostrar y eliminar un ítem. 

**EstudiantesController.php**: Se encarga de manejar toda la lógica de la tabla Estudiantes del sistema, donde se hacen las acciones de crear, editar, mostrar y eliminar un ítem.

**1.1.3. Migraciones:** En el proyecto se pueden apreciar las siguientes migraciones, dentro de la ruta databes->Migrations:
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/6.png?raw=true)
**Create_cursos_table:** Esta migración se refiere a la tabla cursos, donde se describen los campos tales como:
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/7.png?raw=true)

**Create_add_imagen_to_cursos:** Esta migración se refiere a la tabla add imagen to cursos, donde se describen los campos tales como:
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/8.png?raw=true)

**Create_materias_table:** Esta migración se refiere a la tabla materias, donde se describen los campos tales como:
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/9.png?raw=true)

**Create_docentes_table:** Esta migración se refiere a la tabla docentes, donde se describen los campos tales como:
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/10.png?raw=true)

**Create_paises_table:** Esta migración se refiere a la tabla paises, donde se describen los campos tales como:
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/11.png?raw=true)
**Create_departamentos_table:** Esta migración se refiere a la tabla departamentos, donde se describen los campos tales como:}
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/12.png?raw=true)

**Create_municipios_table:** Esta migración se refiere a la tabla municipios, donde se describen los campos tales como:
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/13.png?raw=true)

**Create_estudiantes_table:** Esta migración se refiere a la tabla ediantes, donde se describen los campos tales como:
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/14.png?raw=true)

**Create_cursos_materias_table:** Esta migración se refiere a la tabla cursos materias, donde se describen los campos tales como:
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/15.png?raw=true)

**1.1.4. Rutas principales para el proyecto Laravel**
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/16.png?raw=true)

Dentro del archivo web.php que está en routes, encontramos las rutas principales del proyecto como:

**/cursos:** Esta ruta provee acceso al controlador de recursos el cual tiene como nombre CursosController, que realiza las funcionalidades:
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/17.png?raw=true)
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/18.png?raw=true)

**/docentes:** Esta ruta provee acceso al controlador de recursos el cual tiene como nombre DocentesController, que realiza las funcionalidades:
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/19.png?raw=true)
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/20.png?raw=true)

**/estudiantes:** Esta ruta provee acceso al controlador de recursos el cual tiene como nombre EstudiantesController, que realiza las funcionalidades:
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/21.png?raw=true)
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/22.png?raw=true)

# CONFIGURACIÓN DE LA BASE DE DATOS

Para el caso particular se usó MySQL y, específicamente, PhpMyadmin, herramienta contenida en Xampp.

Para poder trabajar en producción con la base de datos, se deben habilitar los servicios de Apache y  Mysql, dando clic en los botones start del control panel
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/23.png?raw=true)

Si algún puerto está ocupado, se hace el respectivo cambio usando el botón Admin.
**Los datos de acceso a la base de datos son:**
Host: 127.0.0.1
Usuario: root
Clave: clave no asignada
Nombre de la BD: Equipo
Para la correcto configuración del proyecto Laravel y su conexión con la base de datos se agrega la información respectiva en el archivo .env
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/24.png?raw=true)

A través del siguiente panel se pueden hacer configuraciones en la base de datos:
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/25.png?raw=true)

La base de datos se encuentra guardada con todos los tipos de datos y relaciones realizadas, ejecutadas cuando se hicieron las migraciones y modelos.

**Detalles de los modelos y Relaciones Laravel:**

![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/26.png?raw=true)

Los modelos del proyecto Academia contienen toda la información necesaria para cada tabla respectivamente, como se ve a continuación:
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/27.png?raw=true)

Las relaciones de cada tabla se especifican de la siguiente manera, en el mismo modelo:
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/28.png?raw=true)

# DETALLES TÉCNICOS MÓDULOS DEL SISTEMA

**Módulo Estudiantes**
Este módulo se ha creado para la inscripción de estudiantes a nuestra Academia, cualquier persona puede registrarse, con el fin de dejar comentarios; la información aquí suministrada se guardará en la tabla estudiantes de la base de datos ya mencionada. Los campos han sido configurados para que en nombres, primer y segundo apellido solo acepte letras, el tipo de documento es tipo select que tiene como opciones TI, CC, CE, PAS. El campo número de documento ha sido configurado para que solo ingresen número y una cantidad máxima de 11 y mínima de 6, el campo cargar documento se configuró para que solo permita cargar archivos en pdf, en los campos país de expedición, departamento de expedición y municipio de expedición se configuraron que al elegir un país en el campo departamento se muestran los cuales pertenecen a el país y al igual pasa con municipio. En el campo género se configuró tipo select y tiene como opciones (masculino, femenino y no especifica). En los campos país, departamento y municipio de nacimiento está configurado de la misma forma que los de expedición. En el campo de estrato socioeconómico se configuró tipo select y tiene campo opciones del 1 al 6.

Este módulo conecta con la base de datos.

Al entrar a este módulo desde el navegador se vería así:

![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/29.png?raw=true)

**Módulo Cursos**
Este módulo se ha creado para la creación de nuevos cursos en nuestra Academia, solo los administrativos pueden crear nuevos cursos; la información aquí suministrada se guardará en la tabla cursos de la base de datos ya mencionada. Los campos han sido configurados para que en nombre del curso solo tenga una capacidad de 30 letras, en el campo descripción curso se configuró para  tenga una capacidad de 60 letras. En el campo duración del curso se configuró para que solo acepte caracteres tipo numérico de máximo 10 y en el campo cargar imagen se configuró para que solo acepte imágenes tipo png y jpg.

Este módulo conecta con la base de datos.

Al entrar a este módulo desde el navegador se vería así:
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/30.png?raw=true)

**Módulo docentes**
Este módulo se ha creado para la inscripción de nuevos docentes a nuestra Academia, solo los administrativos pueden inscribir nuevos docentes; la información aquí suministrada se guardará en la tabla docentes de la base de datos ya mencionada. Los campos han sido configurados para que en nombres y apellidos del docentes solo tenga una capacidad de 30 letras, en el campo título universitario se configuró para  tenga una capacidad de 20 letras. En el campo edad del docente se configuró para que solo acepte caracteres tipo numérico de máximo 2. En el campo fecha de contrato se configuró para que sea tipo date, en el campo foto  se configuró para que solo acepte imágenes tipo png y jpg. En el campo cargar documento de indetidad se configuro para que solo acepte archivos tipo pdf.

Este módulo conecta con la base de datos.

Al entrar a este módulo desde el navegador se vería así:
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/31.png?raw=true)

La vista (view) en Laravel que permite renderizar esta vista es estudiantes.show.blade. Además, existen otras vistas, dentro de la carpeta estudiantes, relacionadas con este módulo, los cuales permiten realizar el respectivo CRUD, como son:

**Create.blade.php** Vista que provee los datos que el aspirante necesita ingresar, así se ve siguiente formulario en el navegador:
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/32.png?raw=true)

**Show.blade.php** vista que provee los datos ya ingresados del aspirante, así se ve en el navegador:
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/33.png?raw=true)

**edit.blade.php** vista que provee los campos ya ingresados que se podrán modificar, así se ve en el navegador:
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/34.png?raw=true)

**index.blade.php** vista que provee a todos los estudiantes registrados, así se ve en el navegador:
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/35.png?raw=true)

**save.blade.php** vista que provee un estilo al inscribir un estudiante, así se ve en el navegador:
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/36.png?raw=true)

**remove.blade.php** vista que provee un estilos al eliminar un estudiante, así se ve en el navegador:
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/37.png?raw=true)

**to_update.blade.php** vista que provee un estilo al realizar una actualización de la información, así se ve en el navegador:
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/38.png?raw=true)

# MODELO RELACIONAL BD DEL SISTEMA

La base de datos para este sistema, como ya se informó se llama Equipo y el modelo relaciones de las tablas es el siguiente:
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/39.png?raw=true)

# DICCIONARIO DE DATOS
Se anexa documento con todas las especificaciones del diccionario de datos.
DiccionarioDeDatosAcademia.pdf

# CLASES, LIBRERÍAS Y MÉTODOS UTILIZADOS

**Métodos utilizados:**
Para este proyecto en la mayoría de controladores se utilizaron los siguientes métodos:

**Método index:** usualmente lo usamos para mostrar una vista como página principal que puede contener un catálogo o resumen de la información

**Método create:** Este método lo podemos usar para direccionar el sistema a la vista donde se van a recolectar los datos(probablemente con un formulario) para después almacenarlos en un registro nuevo, usualmente redirige al index.

**Método store: **Aquí es donde se actualiza un registro en específico que proviene del método create y normalmente redirige al index

**Método show:** Aquí podemos hacer una consulta de un elemento de la base de datos o de todos los elementos o registros por medio del modelo para realizar una descripción.

**Método Edit:** Este método es similar al de create porque lo podemos usar para mostrar una vista que recolecta los datos pero a diferencia de create es con el fin de actualizar un registro.

**Método update:** Al igual que el store, solo que en vez de provenir de create proviene de edit y en vez de crear un nuevo registro, busca un existente y lo modifica, tambien suele redirigir al index.

**Método Destroy:** En este método usualmente se destruye o elimina un registro y la petición puede provenir de donde sea siempre y cuando sea llamado con el método DELETE, después puede redirigir al index o a otro sitio dependiendo si logro eliminar o no.

