<?php

    require "modelo/conexion.php";

    if($_POST){
        if (isset($_POST['usuario'])) {
            $n_usuario  = $_POST['usuario'];
            $contraseña = $_POST['contraseña'];

            $query = "SELECT id, usuario FROM usuario WHERE usuario = '$n_usuario' AND contrasena = '$contraseña'";
            $respuesta = $conexion->query($query);

            if($respuesta->num_rows == 1){

                session_start();

                $_SESSION['id'] = $respuesta->fetch_row()[0];
                $_SESSION['usuario'] = $n_usuario;

                header('location: http://localhost/proyecto-granja/index.php');
            }
            else{
                echo "<script>alert('Credeciales incorrectas!')</script>";
            }
        }
    }
?>