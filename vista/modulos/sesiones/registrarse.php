<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registrarte</title>
        <link rel="stylesheet" href="vista/css/tabla.css">
    </head>
    <body>
        <div class="contenedor">
        <form action="index.php?pagina=registrarse" method='post'>
                    <?php
                     require "modelo/conexion.php";
                        if($_POST){
                            if (isset($_POST['usuario'])) {
                                $cedula = $_POST['cedula'];
                                $n_usuario = $_POST['n_usuario'];
                                $nombre = $_POST['nombre'];
                                $correo = $_POST['correo'];
                                $contraseña = $_POST['contraseña'];
                                $nacimiento = $_POST['nacimiento'];
                                

                                    $query = "INSERT INTO usuario(cedula, n_usuario, nombre, correo, contraseña, nacimiento) VALUES ('$cedula', $n_usuario, '$nombre', '$correo', '$contraseña', '$nacimiento')";
                                    $respuesta = $conexion->query($query);
                               


                                if($respuesta){
                                    echo "<script>alert('El reporte se ha registrado correctamente')</script>";
                                }
                            }
                        }
                    ?>
               <h1>Registrate.</h1>
               <input class="input-usuario" type="number" name="cedula" placeholder="Cedula.">
               <input class="input-usuario" type="text" name="n_usuario" placeholder="Nombre de usuario.">
               <input class="input-usuario" type="text" name="nombre" placeholder="Nombre.">
               <input class="input-usuario" type="text" name="apellido" placeholder="Apellido.">
               <input class="input-usuario" type="text" name="correo" placeholder="Correo.">
               <input class="input-usuario" type="password" name="contraseña" placeholder="Contraseña.">
               <input class="input-usuario" type="date" name="fecha_n" placeholder="Fecha de nacimiento.">
               <input class="boton-enviar" type="submit" value="Registrar">
         </form>
        </div>

        <footer>
            <h4>Nuestra ubicación:</h4>
            <p>Turmero, Edo. Aragua, Venezuela.</p>
            <h4>Contacto:</h4>
            <p>Teléfono: 0424-3655004</p>
            <p>Correo electrónico: gaboxbellox@gmail.com</p>
       </footer>
    </body>
</html>