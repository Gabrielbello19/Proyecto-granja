
<?php
    require "modelo/conexion.php";
    require "modelo/modelo.php";
    require "controlador/controlador.php";

    if (true /* verificar si no se ha iniciado la sesion */){
        $ctrl = new Controlador();

        if (!isset($_GET['page'])){
            $ctrl->renderPlantilla();
        }    
    }
?>