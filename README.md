# FLEKI-BOLAS_PADEL_TEAM

<p align="right">
  <img src="https://github.com/SantiTru/FLEKI-BOLAS_PADEL_TEAM/assets/117385307/8f5a20de-9129-4e3e-99bb-b97880204160" alt="FlekiBolas280"/>
</p>

Página web equipo profesional de pádel


Notion: https://nebulous-glade-1db.notion.site/FLEKI-BOLAS-P-DEL-TEAM-fad327d6948949b1942a4ff101635158?pvs=74

Fleki-Bolas Pádel Team es una página web en donde podrás realizar reservas de pistas, cursos y clases, además ofrecemos servicio de nutrición y una dieta especializada según tus características. Damos valor añadido a nuestro equipo ya que contamos con un espacio personalizado donde podrás ver todas las reservas realizadas así como ver el tiempo que hace previo a la reserva para poder seleccionar un tipo de pista adecuado (indoor - outdoor).

- 🔭 We are currently working on Figma project and Frontend
- 🌱 We are currently learning about APIs and more
- 🤔 We are looking for help with Database
- 💬 Ask us about padel tennis or cooking!
- 😄 Pronouns: She/her, He/him
- ⚡ Fun fact: Santi's favorite hobby is cooking, Cris' favorite hobby is paddle tennis. This page is our favorite hobbies made web page.

<p align="center">
  <img src="https://github.com/SantiTru/FLEKI-BOLAS_PADEL_TEAM/assets/117385307/22c74aae-aa49-445e-8265-8ee8efa1aaca" alt="FlekiBolas50"/>
</p>

# Bitácora del proyecto

** FIGMA **
Del 13/04/2024 al 28/04/2024

Comenzamos con el diseño del prototipo para saber los elementos a utilizar, diseño de la página, lenguajes a usar, y forma de planificación y organización de la página.  Al ser una página dedicada al pádel y a la nutrición nos hemos basado en páginas retros, estilo a los 90´s con colores llamativos y una interfaz muy sencilla e intuitiva. Durante este tiempo hemos creado:
  * Pasos que hemos dado para la creación del prototipo:
      * Creación de página Desktop: Creamos la página principal sin login, para tener una primera página de muestra para que todo el público pueda conocer Fleki-Bolas Padel Team. En esta página hemos realizado diferente componentes, y para ello se ha creado una sección de recursos, en donde cada frame lo hemos llamado según la sección a la que hace referencia, para que luego en la página de Desktop podamos ir a la sección de Asset y poder elegir el componente más adecuado. Tenemos estos componentes creados para la página página principal:
          * Paleta de colores
          * Tipografía
          * Sobre el equipo - componente
          * Idioma
          * Componenter - Peques Cards
      Al realizar todos estos componentes hacen que se puedan reutilizar para más parte de nuestra página y sea mucho más operativo, por ello merece la pena tardar un poco más de tiempo en estos y luego reutilizar a través de la sección de Assets.

    * Luego nos pusimos a diseñar la página de inicio tras el login, ¿por qué? Porque en esta página queríamos hacer que cuando te logueases pudieses inscribirte en los torneos, ligas, entrenamientos de pádel y más abajo pudieses tener una fleki - agenda donde ver aquellos eventos en los que te has inscrito. Para todo esto hemos usado componentes que hemos creado:
        * Calendario
        * Fleki - agenda
        * Bolas de pádel
     
    * Siguiente, página del carrito de la compra, en esta página hemos querido simular cómo sería la cesta una vez realizases la selección de todos los elementos que deseas adquirir.
          
    * Seguidamente comenzamos a crear la página de los cursos, en esta hemos reutilizados componentes, lo cual nos ha sido mucho más fácil la creación de esta página.
   
    * Comenzamos con la parte de nutrición, hemos hecho un fiel reflejo, al igual que la página de los cursos, y para ellos hemos usado la misma sistemática, realizar componente y reutilizar, de esta forma ha sido mucho más sencilla la construcción. En este punto, he de destacar que hemos usado un overlay para poder hacer el efecto de superponer la card por encima del resto, lo cual ha quedado bastante bien y acorde a lo que buscamos.
   
    * Por últimos hemos realizar el registro y login, porque al ser dos página más sencillas, lo hemos dejado para el final porque teníamos bastante clara su construcción.
   
    * Durante el proceso hemos estado haciendo todas las vinculaciones para que la página pueda navegar de una a otro como si se tratase de la página original. Hemos intentado no realizar muchos cambios a la hora de realizar el html, pero alguno hemos tenido para poder mejorar lo que ya teníamos.
   

** CONSTRUCCION HTML / CSS / JAVASCRIPT

Del 28/04/2024 al 19/05/2024

Durante este periodo de tiempo hemos estado realizando la maquetación de la página web en los diferentes lenguajes seleccionados, en nuestro caso en HTML, para ello empezamos creando las páginas en el mismo orden que en Figma, ya que nos resultaba mucho mejor. Una vez empezamos con la construcción había componentes de Figma que no podíamos realizar con CSS y por tanto hemos metido Javascritp - Vanilla para poder realizar las diferentes acciones que necesitábamos para la lóginca de la página.
Durante este tiempo hemos tenido tutoría con Rocío ya que teníamos algunas dudas de cómo realizar ciertas acciones en la página y queríamos consultarlo con ella, tras la tutoría presencial nos queda bastante claro y continuamos nuestro trabajo para seguir realizando la página web, por ejemplo, le enseñamos el calendario, un calendario donde poder ver los eventos y el cual hemos cambiado de formato con respecto a nuestro prototipo de figma ya que al realizarlo en html tuvimos ciertos problemas y finalmente decidimos hacerlo mediante lista, porque nos era más fácil a la hora de colocar todos los eventos que queríamos. 

** CONSTRUCCION LARAVEL

Del 20/05/2024 al 14/06/2024

Durante este período hemos estado desarrollando el código en Laravel, la verdad, que hemos tenido muchas dificultades, porque hay veces que no nos funcionaban sanctum, otras veces docker, luego los endpoints no salían correctamente y hemos tenido mucha dificultad, tal ha sido que hasta última hora hemos tenido problemas, hemos contactado con Alicia para tener alguna tutoría en este período y que nos pudisese echar una mano para continuar, pero finalmente pudimos averiguar o mejor dicho dar con la clave para poder avanzar y por tanto seguirmos adelante realizando cambios y probando para que todos los endpoint saliensen correctamente.

** CONSTRUCCIÓN DE REACT

Del 20/05/2024 al 10/06/2024

Durante este tiempo hemos estado compaginando React con Laravel, para no quedarnos atrás. En React hemos realizado una página la cual tiene componentes en JavaScript, como es la reproducción de una vídeo, de esta forma hemos realizado una interfaz muy sencilla y visual para una pantalla móvil. Al mismo tiempo hemos estado creando el prototipo en Figma, íbamos a la par, creación de Figma y creación de React, por lo que en este periódo de tiempo hemos realizamos ambas cosas.

** DESPLIEGUE EN AWS

Del 10/06/2024 al 14/06/2024

En ésta última semana hemos realizado el despliegue de la aplicación web en AWS, para ellos hemos estado creando la instancia, configurando apache, poniéndo seguridad SSH, añadiendo el protocolo CERBOT, hemos añadido proftpd, IP elástica, hemos utilizado también duckdns para que nos propocionase un nombre fácil para poder acceder a la página.




## **16/04/2024**

### Tareas realizadas / usuario

- Implementación bitácora del proyecto / ***Santi***
- Dar de alta e informar al equipo educativo el repositorio de GitHub del proyecto / ***Santi***
- Resumen dudas / ***Santi***
- Implementar lista de tareas / ***Santi***

### Próximos pasos

☀️ Revisión del esquema E/R según observaciones del equipo educativo. Página mobile Figma.

## **06/05/2024**

### Tareas realizadas / usuario

- Versión de Login y Registro con Javascript / ***Santi***
- Revisar estructura de carpetas / ***Santi***
- Consulta de dudas / ***Santi***

### Próximos pasos

☀️ Revisión del esquema E/R según observaciones del equipo educativo.
☀️ Plantear Sección tareas de usuario
☀️ Plantear sección nutrición

### Despliegue de la página web
Dirección: [flekipadel.duckdns.org](https://flekipadel.duckdns.org/)


