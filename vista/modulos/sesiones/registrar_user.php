<?php

    require "modelo/conexion.php";

    if($_POST){
        if (isset($_POST['usuario'])) {
            $cedula     = $_POST['cedula'];
            $n_usuario  = $_POST['usuario'];
            $nombre     = $_POST['nombre'];
            $apellido   = $_POST['apellido'];
            $correo     = $_POST['correo'];
            $contraseña = $_POST['contraseña'];
            $nacimiento = $_POST['nacimiento'];

            $query = "INSERT INTO usuario(cedula, usuario, nombre, apellido, correo, contrasena, nacimiento) VALUES ('$cedula', '$n_usuario', '$nombre', '$apellido', '$correo', '$contraseña', '$nacimiento')";
            $respuesta = $conexion->query($query);

            if($respuesta){
                echo "<script>alert('El reporte se ha registrado correctamente')</script>";

                header('location: http://localhost/proyecto-granja/index.php');
            }
            else {
                echo "<script>alert('Hubo un error al registrar el usuario')</script>";

                header('location: http://localhost/proyecto-granja/sesion.php');
            }
        }
    }
?>