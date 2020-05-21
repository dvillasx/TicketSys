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
mismo. El sistema puedes _acceder_ por medio de tu correo electrónico y _salir_ ya una vez dentro del
sistema.

Usamos toda la _potencia_ de _Laravel_ y una estructura _MVC_ para _proteger_ y _ver_ en todo momento.
Se cuenta con una base de datos relacional y la validación del mismo.

También presenta una apariencia amistosa e intuitiva para que la experiencia del usuario y el diseño
sean del sistema sea algo vistoso para el usuario final.

El sistema también tiene una sección especial para agregar _evidencia_ a algún reporte ya si es necesario
mostrar de manera _grafica_ el incidente.

## Damian Villaseñor

Ingeniería en Computación
Universidad de Guadalajara

## Instrucciones de Instalación

-   composer require laravel/ui --dev
-   php artisan ui vue --auth
-   composer require laravelcollective/html
-   composer require laraveles/spanish
-   php artisan vendor:publish --tag=lang
