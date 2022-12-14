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

# INTRODUCCI??N

Este proyecto fue creado por la necesidad que tiene una instituci??n en concreto, Se cre?? un aplicativo, en este caso proyecto Academia. La idea naci?? de la misma necesidad, registrar todo lo relacionado con la instituci??n, es necesario porque no se cuenta con un programa que permite hacer tales funciones. El sistema no es c??moda visualmente, por el momento no es adecuado para el usuario

Este sistema cuenta con m??dulos necesarios para la creaci??n de cursos, docentes y estudiantes, as?? como tambi??n una secci??n donde se habla detalladamente sobre la fundaci??n, visi??n, misi??n y objetivos de la instituci??n. El proyecto se basa sobre el lenguaje de programaci??n PhP, adem??s,  utilizando el framework Laravel el cual est?? muy vinculado con PhP. Se utiliz?? un gestor de base de datos y un sistemas de control de versiones.


# OBJETIVOS
Los objetivos que tiene este documento t??cnico del proyecto Academia son los siguientes:
Crear un curso en espec??fico para la academia, organizar dichos cursos para tener constancia de que existen.
Elaborar una secci??n donde se pueda agregar un docente a la academia, adem??s que est?? relacionado con los cursos creados.
Gestionar todos los datos de los estudiante, docentes y cursos creados por el sistema, tener un historial de todo lo relacionado con el proyecto academia.

# ALCANCE
El proyecto Academia tiene las siguientes limitaciones:
El documento est?? dirigido a programadores en general, deben tener conocimientos sobre laravel, entre otras extensiones necesarias, como tambi??n dirigido a personal de la empresa de desarrollo o personal autorizado del SENA, instructores de ADSI y aprendices de otras fichas.
El sistema del proyecto Academia est?? dirigido a una instituci??n en especial, surgi?? de una necesidad o falla que ten??a dicha instituci??n .
El software se trabaj?? solo por el lado backend, utilizando como lenguaje de programaci??n PHP y framework Laravel, el proyecto avanz?? de manera ??gil y eficiente, se construyeron las base de datos, migraciones, modelos y CRUM necesarios para este proyecto, as?? como, GitHub para el repositorio del proyecto y el control de versiones.

El sistema fue probado en servidores locales, permite crear un curso, descripci??n y duraci??n. adem??s, se registra un docente y estudiante, guardando todo los datos necesarios para que sean validados en la base de datos.
El sistema puede organizar los datos para que se puedan actualizar si es necesario, como tambi??n eliminar si es el caso.
Los datos ingresados deben ser v??lidos para que se pueda continuar con el registro o creaci??n.
El sistema a??n no permite que los usuarios se registren o inicien sesi??n, no contiene un m??dulo de gesti??n de usuarios.
En esta fase del proyecto no se ha desarrollado a??n un Frontend. Se ha trabajado ??nicamente en el backend de la aplicaci??n, en una versi??n no terminada. Los m??dulos que se han trabajado son los de curso,docente y estudiantes. Por tanto este manual solo aplica al backend.


Este documento es aplicable a la versi??n 1.0 del programa desarrollado por la ficha 2341240..

# USUARIOS
Usuarios del software, descripci??n natural de las personas que usar??n el sistema para contextualizar sobre el personal de la empresa cliente. 
Se debe aclarar que, en esta fase del proyecto, no se han completado los roles de usuario, privilegios administrativos.
De acuerdo al documento de requisitos, los usuarios que tendr?? este aplicativo son:
Estudiantes: son las personas que desean estudiar en la instituci??n, los cuales se pueden registrar llenado los campos requeridos y que son necesarios para continuar con el registro.
Coordinadores: Son usuarios que tendr??n un rol especial en el aplicativo ya que podr??n disponer de las siguientes opciones: editar la informaci??n de cada estudiante, as?? como de los cursos y docentes.
Usuario Administrador: Corresponde a administradores del sistema que se encarga de hacer el respectivo mantenimiento, actualizaciones, creaci??n de nuevos m??dulos, nuevas funcionalidades en el c??digo del programa.

# HERRAMIENTAS UTILIZADAS EN EL DESARROLLO

** Visual Studio Code**
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/1.png?raw=true)

Es un IDE desarrollado. Se utiliz?? la versi??n 1.71 cuya descarga se obtuvo de https://code.visualstudio.com/
- Plugins instalados:
- Bootstrap Snippets
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/2.png?raw=true)
- Laravel extensi??n Pack: incluye: Laravel Blade, laravel snippets
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/3.png?raw=true)
**Framework Laravel**
En la instalaci??n se indic?? que el ejecutable de php se encuentra en la carpeta de XAMPP, en la ruta: C:\xampp\php

**Composer:**
Es un IDE de desarrollo creado por Nils Adermann, Jordi Boggiano La versi??n que se utiliz?? fue 2.4.2  y se descarg?? de https://getcomposer.org/download/ .

**Git Bash:**
Es un IDE de desarrollo creado por Linus Torvalds La versi??n que se utiliz?? fue 3.3.0  y se descarg?? de https://git-scm.com/downloads .

**Xampp:**
Es un IDE de desarrollo creado por Baiker y Anthony Corporation La versi??n que se utiliz?? fue 3.3.0  y se descarg?? de https://www.apachefriends.org/es/download.html .

# METODOLOG??A DE PROYECTO

** SCRUM**
Para el desarrollo de este proyecto de software se utiliz?? la metodolog??a CRUM, la cual consiste en un proceso en el que se aplican de manera regular un conjunto de buenas pr??cticas para trabajar colaborativamente, en equipo y obtener el mejor resultado posible de proyectos.
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/4.png?raw=true)

**6.2 CASCADA**

El modelo en cascada o waterfall model, es la propuesta de un enfoque metodol??gico que consiste en ordenar de forma lineal las distintas etapas que debes de seguir al momento de desarrollar

# REQUISITOS T??CNICOS PARA DESARROLLAR EL SISTEMA
Para el correcto desarrollo del proyecto se usaron 2 Computadores con las siguientes caracter??sticas:
RAM: 64,0 GB
Disco Duro: 
Procesador: Intel(R) Xeon(R) W-10855M CPU @2.80GHz 2.81 GHz
Pantalla: intel(R) UHD Graphics P630

Para lo servidores de prueba se crearon locales del sistemas
Ancho banda del internet

# REQUISITOS T??CNICOS PARA LA EJECUCI??N DEL SISTEMA

La p??gina web con todas sus funcionalidades, se podr?? acceder desde cualquier computador que tenga m??nimo estas caracter??sticas:
Procesador: Intel R Core (i3)
RAM: 4 GB
Disco duro: HDD 230 GB
Se ha probado que el sistema funciona correctamente en los siguientes navegadores:
Google Chrome en su ??ltima versi??n
Mozilla Firefox en su ultima versi??n
Opera en su ultima versi??n
Microsoft Edge

# REGLAS DE NEGOCIO
**Ley de Protecci??n de Datos Personales o Ley 1581 de 2012**
Reconoce y protege el derecho que tienen todas las personas a conocer, actualizar y rectificar las informaciones que se hayan recogido sobre ellas en bases de datos o archivos que sean susceptibles de tratamiento por entidades de naturaleza p??blica o privada.

**LEY 30 DE 1992 (Diciembre 28)**
ART??CULO 1. La Educaci??n Superior es un proceso permanente que posibilita el desarrollo de las potencialidades del ser humano de una manera integral, se realiza con posterioridad a la educaci??n media o secundaria y tiene por objeto el pleno desarrollo de los alumnos y su formaci??n acad??mica o profesional.

# DETALLES DE DISTRIBUCI??N DE CARPETAS Y ARCHIVOS

**Distribuci??n de carpetas en el backend**

1.1.2. Controladores de recursos
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/5.png?raw=true)

Dentro de Http tenemos la carpeta Controllers, donde a su vez tenemos los siguientes controladores que son de recursos:

**CursosController.php:** Se encarga de manejar toda la l??gica para la tabla Cursos del sistema, donde se programan las acciones de crear nuevo ??tem, editar ??tem, mostrar ??tem seleccionado y eliminar el ??tem seleccionado.

**DocentesController.php:** Se encarga de manejar toda la l??gica de la tabla Docentes del sistema, donde se hacen las acciones de crear, editar, mostrar y eliminar un ??tem. 

**EstudiantesController.php**: Se encarga de manejar toda la l??gica de la tabla Estudiantes del sistema, donde se hacen las acciones de crear, editar, mostrar y eliminar un ??tem.

**1.1.3. Migraciones:** En el proyecto se pueden apreciar las siguientes migraciones, dentro de la ruta databes->Migrations:
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/6.png?raw=true)
**Create_cursos_table:** Esta migraci??n se refiere a la tabla cursos, donde se describen los campos tales como:
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/7.png?raw=true)

**Create_add_imagen_to_cursos:** Esta migraci??n se refiere a la tabla add imagen to cursos, donde se describen los campos tales como:
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/8.png?raw=true)

**Create_materias_table:** Esta migraci??n se refiere a la tabla materias, donde se describen los campos tales como:
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/9.png?raw=true)

**Create_docentes_table:** Esta migraci??n se refiere a la tabla docentes, donde se describen los campos tales como:
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/10.png?raw=true)

**Create_paises_table:** Esta migraci??n se refiere a la tabla paises, donde se describen los campos tales como:
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/11.png?raw=true)
**Create_departamentos_table:** Esta migraci??n se refiere a la tabla departamentos, donde se describen los campos tales como:}
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/12.png?raw=true)

**Create_municipios_table:** Esta migraci??n se refiere a la tabla municipios, donde se describen los campos tales como:
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/13.png?raw=true)

**Create_estudiantes_table:** Esta migraci??n se refiere a la tabla ediantes, donde se describen los campos tales como:
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/14.png?raw=true)

**Create_cursos_materias_table:** Esta migraci??n se refiere a la tabla cursos materias, donde se describen los campos tales como:
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/15.png?raw=true)

**1.1.4. Rutas principales para el proyecto Laravel**
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/16.png?raw=true)

Dentro del archivo web.php que est?? en routes, encontramos las rutas principales del proyecto como:

**/cursos:** Esta ruta provee acceso al controlador de recursos el cual tiene como nombre CursosController, que realiza las funcionalidades:
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/17.png?raw=true)
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/18.png?raw=true)

**/docentes:** Esta ruta provee acceso al controlador de recursos el cual tiene como nombre DocentesController, que realiza las funcionalidades:
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/19.png?raw=true)
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/20.png?raw=true)

**/estudiantes:** Esta ruta provee acceso al controlador de recursos el cual tiene como nombre EstudiantesController, que realiza las funcionalidades:
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/21.png?raw=true)
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/22.png?raw=true)

# CONFIGURACI??N DE LA BASE DE DATOS

Para el caso particular se us?? MySQL y, espec??ficamente, PhpMyadmin, herramienta contenida en Xampp.

Para poder trabajar en producci??n con la base de datos, se deben habilitar los servicios de Apache y  Mysql, dando clic en los botones start del control panel
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/23.png?raw=true)

Si alg??n puerto est?? ocupado, se hace el respectivo cambio usando el bot??n Admin.
**Los datos de acceso a la base de datos son:**
Host: 127.0.0.1
Usuario: root
Clave: clave no asignada
Nombre de la BD: Equipo
Para la correcto configuraci??n del proyecto Laravel y su conexi??n con la base de datos se agrega la informaci??n respectiva en el archivo .env
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/24.png?raw=true)

A trav??s del siguiente panel se pueden hacer configuraciones en la base de datos:
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/25.png?raw=true)

La base de datos se encuentra guardada con todos los tipos de datos y relaciones realizadas, ejecutadas cuando se hicieron las migraciones y modelos.

**Detalles de los modelos y Relaciones Laravel:**

![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/26.png?raw=true)

Los modelos del proyecto Academia contienen toda la informaci??n necesaria para cada tabla respectivamente, como se ve a continuaci??n:
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/27.png?raw=true)

Las relaciones de cada tabla se especifican de la siguiente manera, en el mismo modelo:
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/28.png?raw=true)

# DETALLES T??CNICOS M??DULOS DEL SISTEMA

**M??dulo Estudiantes**
Este m??dulo se ha creado para la inscripci??n de estudiantes a nuestra Academia, cualquier persona puede registrarse, con el fin de dejar comentarios; la informaci??n aqu?? suministrada se guardar?? en la tabla estudiantes de la base de datos ya mencionada. Los campos han sido configurados para que en nombres, primer y segundo apellido solo acepte letras, el tipo de documento es tipo select que tiene como opciones TI, CC, CE, PAS. El campo n??mero de documento ha sido configurado para que solo ingresen n??mero y una cantidad m??xima de 11 y m??nima de 6, el campo cargar documento se configur?? para que solo permita cargar archivos en pdf, en los campos pa??s de expedici??n, departamento de expedici??n y municipio de expedici??n se configuraron que al elegir un pa??s en el campo departamento se muestran los cuales pertenecen a el pa??s y al igual pasa con municipio. En el campo g??nero se configur?? tipo select y tiene como opciones (masculino, femenino y no especifica). En los campos pa??s, departamento y municipio de nacimiento est?? configurado de la misma forma que los de expedici??n. En el campo de estrato socioecon??mico se configur?? tipo select y tiene campo opciones del 1 al 6.

Este m??dulo conecta con la base de datos.

Al entrar a este m??dulo desde el navegador se ver??a as??:

![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/29.png?raw=true)

**M??dulo Cursos**
Este m??dulo se ha creado para la creaci??n de nuevos cursos en nuestra Academia, solo los administrativos pueden crear nuevos cursos; la informaci??n aqu?? suministrada se guardar?? en la tabla cursos de la base de datos ya mencionada. Los campos han sido configurados para que en nombre del curso solo tenga una capacidad de 30 letras, en el campo descripci??n curso se configur?? para  tenga una capacidad de 60 letras. En el campo duraci??n del curso se configur?? para que solo acepte caracteres tipo num??rico de m??ximo 10 y en el campo cargar imagen se configur?? para que solo acepte im??genes tipo png y jpg.

Este m??dulo conecta con la base de datos.

Al entrar a este m??dulo desde el navegador se ver??a as??:
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/30.png?raw=true)

**M??dulo docentes**
Este m??dulo se ha creado para la inscripci??n de nuevos docentes a nuestra Academia, solo los administrativos pueden inscribir nuevos docentes; la informaci??n aqu?? suministrada se guardar?? en la tabla docentes de la base de datos ya mencionada. Los campos han sido configurados para que en nombres y apellidos del docentes solo tenga una capacidad de 30 letras, en el campo t??tulo universitario se configur?? para  tenga una capacidad de 20 letras. En el campo edad del docente se configur?? para que solo acepte caracteres tipo num??rico de m??ximo 2. En el campo fecha de contrato se configur?? para que sea tipo date, en el campo foto  se configur?? para que solo acepte im??genes tipo png y jpg. En el campo cargar documento de indetidad se configuro para que solo acepte archivos tipo pdf.

Este m??dulo conecta con la base de datos.

Al entrar a este m??dulo desde el navegador se ver??a as??:
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/31.png?raw=true)

La vista (view) en Laravel que permite renderizar esta vista es estudiantes.show.blade. Adem??s, existen otras vistas, dentro de la carpeta estudiantes, relacionadas con este m??dulo, los cuales permiten realizar el respectivo CRUD, como son:

**Create.blade.php** Vista que provee los datos que el aspirante necesita ingresar, as?? se ve siguiente formulario en el navegador:
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/32.png?raw=true)

**Show.blade.php** vista que provee los datos ya ingresados del aspirante, as?? se ve en el navegador:
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/33.png?raw=true)

**edit.blade.php** vista que provee los campos ya ingresados que se podr??n modificar, as?? se ve en el navegador:
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/34.png?raw=true)

**index.blade.php** vista que provee a todos los estudiantes registrados, as?? se ve en el navegador:
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/35.png?raw=true)

**save.blade.php** vista que provee un estilo al inscribir un estudiante, as?? se ve en el navegador:
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/36.png?raw=true)

**remove.blade.php** vista que provee un estilos al eliminar un estudiante, as?? se ve en el navegador:
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/37.png?raw=true)

**to_update.blade.php** vista que provee un estilo al realizar una actualizaci??n de la informaci??n, as?? se ve en el navegador:
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/38.png?raw=true)

# MODELO RELACIONAL BD DEL SISTEMA

La base de datos para este sistema, como ya se inform?? se llama Equipo y el modelo relaciones de las tablas es el siguiente:
![](https://github.com/JuanCa987/Trabajo/blob/master/Imagenes/39.png?raw=true)

# DICCIONARIO DE DATOS
Se anexa documento con todas las especificaciones del diccionario de datos.
DiccionarioDeDatosAcademia.pdf

# CLASES, LIBRER??AS Y M??TODOS UTILIZADOS

**M??todos utilizados:**
Para este proyecto en la mayor??a de controladores se utilizaron los siguientes m??todos:

**M??todo index:** usualmente lo usamos para mostrar una vista como p??gina principal que puede contener un cat??logo o resumen de la informaci??n

**M??todo create:** Este m??todo lo podemos usar para direccionar el sistema a la vista donde se van a recolectar los datos(probablemente con un formulario) para despu??s almacenarlos en un registro nuevo, usualmente redirige al index.

**M??todo store: **Aqu?? es donde se actualiza un registro en espec??fico que proviene del m??todo create y normalmente redirige al index

**M??todo show:** Aqu?? podemos hacer una consulta de un elemento de la base de datos o de todos los elementos o registros por medio del modelo para realizar una descripci??n.

**M??todo Edit:** Este m??todo es similar al de create porque lo podemos usar para mostrar una vista que recolecta los datos pero a diferencia de create es con el fin de actualizar un registro.

**M??todo update:** Al igual que el store, solo que en vez de provenir de create proviene de edit y en vez de crear un nuevo registro, busca un existente y lo modifica, tambien suele redirigir al index.

**M??todo Destroy:** En este m??todo usualmente se destruye o elimina un registro y la petici??n puede provenir de donde sea siempre y cuando sea llamado con el m??todo DELETE, despu??s puede redirigir al index o a otro sitio dependiendo si logro eliminar o no.

