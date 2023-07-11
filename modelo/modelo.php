<?php
    class Modelo{
        // Función que obtiene las peticiones GET y devuelve un sitio concreto
        public function LogicaDeEnlaces($peticion){

            // Diccionario de refernecia
            $referencia = array(
                "inicio"          => "dashboard",
                "reportes"        => "reporte",
                "registro-animal" => "registro_animal",
            );

            require "vista/modulos/main/".$referencia[$peticion].".php";
        }
    }
?>
