<?php
    class Modelo{
        // Función que obtiene las peticiones GET y devuelve un sitio concreto
        public function LogicaDeEnlaces($peticion){

            // Diccionario de refernecia
            $referencia = array(
                "inicio"             => "inicio",
                "reportes"           => "reporte",
                "registro-animal"    => "registro_animal",
                "vacunacion"         => "vacunacion",
                "ver-reportes"       => "ver_reportes",
                "ver-dosis"       => "ver_dosis"
            );

            require "vista/modulos/main/".$referencia[$peticion].".php";
        }

        public function LogicaDeEnlacesSesion($peticion){

            // Diccionario de refernecia
            $referencia = array(
                "login"             => "inicio_sesion",
                "register"          => "registrarse",
                "register_user"     => "registrar_user",
                "login_user"        => "inicio_sesion_user",
                "logout"            => "logout"
            );

            require "vista/modulos/sesiones/".$referencia[$peticion].".php";
        }
    }
?>
