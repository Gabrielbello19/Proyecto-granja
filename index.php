<?php
    session_start();

    require 'modelo/modelo.php';
    require 'controlador/controlador.php';

    $ctrl = new Controlador();

    if (isset($_SESSION['id'])){

        require 'modelo/conexion.php';

        $id = $_SESSION['id'];

        $consulta = "SELECT * FROM usuario WHERE id = $id";
        $resultado = $conexion->query($consulta);

        if($resultado->num_rows == 1){
            $ctrl->renderPlantilla();
        }
        else{
            session_destroy();
            $ctrl->renderPlantillaSesiones();
        }
    }
    else {

        header('location: sesion.php');

    }
?>