<?php
    class Modelo{
        // Función que obtiene las peticiones GET y devuelve un sitio concreto
        public function LogicaDeEnlaces($peticion){

            // Diccionario de refernecia
            $referencia = array(
<<<<<<< HEAD
                "inicio"    => "dashboard",
                "reportes"    => "reporte",
                "registro-animal"    => "registro_animal",
                "vacunacion"    => "vacunacion",
=======
                "inicio"          => "dashboard",
                "reportes"        => "reporte",
                "registro-animal" => "registro_animal",
>>>>>>> 0d2e6e9f5eb25fab897c007bdb4ad03f417f6669
            );

            require "vista/modulos/main/".$referencia[$peticion].".php";
        }
    }
?>
