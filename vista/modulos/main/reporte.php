<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="vista/css/style.css">
        <link rel="stylesheet" href="vista/css/navbar.css">
        <title>Generar Reporte</title>
    </head>
    <body>
        <div class="topnav">
            <img src="vista/img/logo.png" width="50">
            <a href="index.php?pagina=inicio">Inicio</a>
            <a href="index.php?pagina=reportes" class="active">Reporte</a>
            <a href="index.php?pagina=registro-animal" >Registrar Animal</a>
            <a href="index.php?pagina=vacunacion">Registro de Vacunas</a>
            <a href="index.php?pagina=ver-reportes">Ver Reportes</a>
            <a href="index.php?pagina=ver-dosis">Ver Dosis</a>
            <form action="sesion.php?q=logout" method="post">
                <input type="submit" class="boton-cerrar-sesion" value="Cerrar Sesion">
            </form>
        </div>
        <div class="container-fluid p-5">
            <h3 class="ps-5">Crear Reporte</h3>
            <div class="card p-5 bg-dark text-white">
                <form action="index.php?pagina=reportes" method='post'>
                    <?php
                        require "modelo/conexion.php";

                        if($_POST){
                            if (isset($_POST['tipo']) && isset($_POST['animal']) && isset($_POST['mensaje'])){
                                $emisor = isset($_POST['emisor'])? $_POST['emisor'] : $_SESSION['usuario'];
                                $tipo = $_POST['tipo'];
                                $animal = $_POST['animal'];
                                $mensaje = $_POST['mensaje'];

                                $a = [$emisor, $tipo, $animal, $mensaje];

                                $query = "INSERT INTO reporte (usuario, id_animal, mensaje, tipo) VALUES ('$emisor', $animal, '$mensaje', '$tipo')";

                                $respuesta = $conexion->query($query);

                                if($respuesta){
                                    echo "<script>alert('El reporte se ha registrado correctamente')</script>";
                                }
                            }
                        }
                    ?>

                    <label>Yo he creado este reporte.</label>
                    <input id="yoCreeRep" type="checkbox" id="alguien-mas" checked>
                    <br>

                    <input id="yoCreeRep_t" type="text" name="emisor" placeholder="nuevo emisor" disabled>

                    <br>
                    <br>
                    
                    <label>Tipo de revision </label>
                    <select name="tipo" required>
                        <option></option>
                        <option value="rutina"> Chequeo de rutina </option>
                        <option value="emergencia"> Chequeo de emergencia </option>
                        <option value="nacimiento"> Reporte de nacimiento </option>
                        <option value="mortalidad"> Reporte de mortalidad </option>
                    </select>

                    <br>
                    <br>
                    
                    <label>Animal </label>
                    <select name="animal" required>
                        <option></option>
                        <?php
                            //capturar todos los animales
                            require "modelo/conexion.php";

                            $query = "SELECT a.id, e.animal FROM animal a LEFT JOIN especie e ON a.id_especie = e.id";
                            $resultado = $conexion->query($query);

                            while ($res = $resultado->fetch_assoc()){
                                $animal_id = $res['id'];
                                $animal = $res['animal'];
                                echo "<option value='$animal_id'>$animal_id - $animal</option>";
                            }
                        ?>
                    </select>

                    <br>
                    <br>

                    <label>Descripcion</label>
                    <textarea id="textoMensaje" name="mensaje" rows="10" maxlength="500" required></textarea>
                    <p id="textoMensajeCuenta">0/500</p>

                    <input class="submit" type="submit" value="Enviar">
                </form>
            </div>
        </div>
        <script src="vista/js/form.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
