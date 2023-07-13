<?php
    class Controlador {

        public function RenderPlantilla(){
            include "vista/plantilla.php";
        }

        public function renderPlantillaSesiones(){
            include "vista/plantilla_sesiones.php";
        }

        // funcion para ir al inicio
        public function PeticionesGet(){
            if (isset($_GET['pagina'])){
                $modelo = new Modelo();

                $modelo->LogicaDeEnlaces($_GET['pagina']);
            }
            else {
                $modelo = new Modelo();
                
                $modelo->LogicaDeEnlaces('inicio');
            }
        }

        // funcion para ir al inicio de sesion
        public function PeticionesGetSesiones(){
            if (isset($_GET['q'])){
                $modelo = new Modelo();

                $modelo->LogicaDeEnlacesSesion($_GET['q']);
            }
            else {
                $modelo = new Modelo();
                
                $modelo->LogicaDeEnlacesSesion('login');
            }
        }
    }
?>