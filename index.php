<?php
    require "controlador/controlador.php";

    if (true /* verificar si no se ha iniciado la sesion */){
        $ctrl = new Controlador();
    
        $ctrl->ir_al_inicio_de_sesion();
    }
?>