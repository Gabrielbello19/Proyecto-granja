<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="vista/css/style.css">
        <link rel="stylesheet" href="vista/css/navbar.css">
        <title>Registro de vacunacion</title>
    </head>
    <body>
        <div class="topnav">
            <a href="index.php?pagina=inicio">Inicio</a>
            <a href="index.php?pagina=reportes">Reporte</a>
            <a href="index.php?pagina=registro-animal">Registrar Animal</a>
            <a href="index.php?pagina=vacunacion" class="active">Registro de vacunas</a>
        </div>
        <div class="container-fluid p-5">
            <h3 class="ps-5">Registro de vacunas</h3>
            <div class="card p-5 bg-dark text-white">
                <form action="index.php?pagina=vacunacion" method="post">
                    
                    <label> Vacuna:  </label><br>
                    <input type="text" name="vacuna" placeholder="Vacuna."><br>
                    <br>
                    <label> Animal:  </label><br>
                    <select name="animal" required>
                        <option></option>
                        <?php
                            //capturar todos los animales
                            require "modelo/conexion.php";

                            $query = "SELECT * FROM especie";
                            $resultado = $conexion->query($query);

                            while ($res = $resultado->fetch_assoc()){
                                $animal_id = $res['id'];
                                $animal = $res['animal'];
                                echo "<option value='$animal_id'>$animal</option>";
                            }
                        ?>
                    </select>
                    <br>
                    <label> Numero de dosis:  </label><br>
                    <input type="number" name="nro_dosis" placeholder="Numero de dosis."><br>
                    <br>
                    <label> Fecha de aplicacion:  </label><br>
                    <input type="date" name="aplicada" placeholder="Aplicada."><br>
                    <br>
                    <label> Proxima aplicacion:  </label><br>
                    <input type="date" name="prox_dosis" placeholder="Proxima dosis."><br>
                    <br>
                    <input class="boton-enviar" type="submit" value="Registrar">
                </form>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
