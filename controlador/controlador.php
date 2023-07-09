<?php
    class Controlador {
        // funcion para ir al inicio de sesion
        function ir_al_inicio_de_sesion(){
            require "./vista/modulos/sesiones/inicio_sesion.php";
        }

        function dashboard(){
            require __DIR__.'/../vista/modulos/main/dashboard.php';
        }
    }
?>