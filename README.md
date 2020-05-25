<p align="center"><img src="https://s3-us-west-2.amazonaws.com/lasaga-blog/media/images/udg.original.jpg" width="400"></p>

## TicketSys

Proyecto de la materia de Programación para Internet
En vista de lo sucedido con la pandemia y la obligación del trabajo en _home office_,
me vi en la situación de tener que realizar trabajos junto con mis compañeros del
modular de forma remota, entre las pruebas, bugs, documentación, no daba abasto.
El problema en particular era que no teníamos una manera de ver el _estatus_ de los
**reportes** o de ver _evidencia_ de lo que íbamos reportándonos entre nosotros y
no solo eso, sino que había veces en que no sabíamos quien estaba **disponible** para
ayudarnos a modificar o solucionar algo y en ocasiones este problema requería una
_prioridad_ alta. Un error común entre nosotros era el no saber describir el _tipo_ de
problema ya que siempre le dábamos otro tipo de redacción y esto ocasionaba mal entendidos
ya a veces era algo muy fácil, pero en el _título_ del problema entendíamos algo diferente.

## Descripción del Proyecto

Este proyecto integra todas las herramientas necesarias para erradicar los problemas que se
me presentaron a la hora de afrontar esta pandemia desde el hogar.

El sistema en busca de darle más que un enfoque de un proyecto escolar lo vi como una organización
en este tenemos _previamente_ ingresadas _Áreas_, _Tipos de Problema_, _Estatus_ y _Prioridades_.
Ya en el sistema podemos encontrar con un sistema de creación de _Reportes_ llamados aquí como
**Tickets** estos pueden ser _agregados_, _modificados_, _mostrados_, _indexados_ y _eliminados_
siempre y cuando se cumplan con las _credenciales_ correctas, estas son _verificadas_ por medio
de _correo electrónico_ además que al crear un **Ticket** recibes una _confirmación_ de la creación del
mismo. Al sistema puedes _acceder_ por medio de tu correo electrónico y _salir_ ya una vez dentro del
sistema.

Usamos toda la _potencia_ de _Laravel_ y una estructura _MVC_ para _proteger_ y _ver_ en todo momento.
Se cuenta con una base de datos relacional y la validación del mismo.

También presenta una apariencia amistosa e intuitiva para que la experiencia del usuario y el diseño del sistema sea algo vistoso para el usuario final.

El sistema también tiene una sección especial para agregar _evidencia_ a algún reporte si es necesario
mostrar de manera _grafica_ el incidente.

En el uso cotidiano, el usuario _accede_ al sistema por medio de sus _credenciales_, en caso de no tener, deberá
_registrarse_ y _confirmar su correo_, una vez _verificado_ en el menú tendrá una _amplia información_ sobre sus **Tickets** _asignados_ y los que el asigno. En el inicio se visualizarán las _tarjetas_, la cantidad de **tickets** _pendientes_ los que ya fueron _realizados_ y los que han sido _bloqueados_ y de igual manera para los tickets en los que se trabajó solo los que le fueron _asignados_, también una pequeña gráfica de cuales tipos de ** tickets** son los que más se le solicitan por su _área_.

Se le permitirá _acceder_ a la _creación_ de un _nuevo_ **Ticket** en donde llenará un _formulario_ el cual le ayudará a llenar de manera _cómoda_ su reporte, al elegir un área el sistema _automáticamente_ le dará un _listado_ de los tipos de problemas que pueden resolver el área y _ajustar_ la prioridad. Una vez terminado verá en una _tabla_ el listado de reportes y a su vez podra _ver los detalles_, _modificarlos_ solo en _descripción_ e _urgencia_ y en base a algunas _políticas_ _eliminarlo_.

En la sección de los asignados se le mostrará una _tabla_ con todos los ** tickets** asignados en los que podrá
acceder y ver _más detalles_ y _editar sus estatus_ para que la persona que levantó el reporte lleve un _tracking_ de cómo va el curso de su ticket.

En el caso de necesitar mostrar alguna _evidencia_ se hará una vez determinando el **ticket** al cual se le
va a _acompañar_ la evidencia. Una vez levantado podas ver en una _tabla_ tus evidencias _subidas_ y en ella algunas _acciones_ como lo son _descargar_ o _eliminar_ en el caso de tener las _credenciales correctas_. Así a su vez para los asignados puedes descargar y ver la información anexada al reporte.

## Damian Villaseñor

Ingeniería en Computación
Universidad de Guadalajara

## Instrucciones de Instalación

-   composer require laravel/ui --dev
-   php artisan ui vue --auth
-   composer require laravelcollective/html
-   composer require laraveles/spanish
-   php artisan vendor:publish --tag=lang
-   Una vez instalado se registra al sistema y verifica para poder usarlo
-   Para el uso de correo debe configurar el .env para usar tu cuenta de mailtrap
