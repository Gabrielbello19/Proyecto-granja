<?php
    class Controlador {

        public function RenderPlantilla(){
            include "vista/plantilla.php";
        }

        // funcion para ir al inicio de sesion
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
    }
?>