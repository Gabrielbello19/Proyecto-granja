<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="vista/css/tabla.css">
        <link rel="stylesheet" href="vista/css/navbar.css">
        <title>Inicio</title>
    </head>
    <body>
        <div class="topnav">
            <img src="vista/img/logo.png" width="50">
            <a href="index.php?pagina=inicio">Inicio</a>
            <a href="index.php?pagina=reportes">Reporte</a>
            <a href="index.php?pagina=registro-animal" >Registrar Animal</a>
            <a href="index.php?pagina=vacunacion">Registro de Vacunas</a>
            <a href="index.php?pagina=ver-reportes">Ver Reportes</a>
            <a href="index.php?pagina=ver-dosis" class="active">Ver Dosis</a>
            <form action="sesion.php?q=logout" method="post">
                <input type="submit" class="boton-cerrar-sesion" value="Cerrar Sesion">
            </form>
        </div>
        <div class="container-fluid p-5">
            <h3 class="ps-5">Histórico de vacunas</h3>
            <table class='styled-table'>
                <thead class='headTableForQuote'>
                    <tr>
                        <td class='fw-bold'>Código</td>
                        <td class='fw-bold'>Tipo</td>
                        <td class='fw-bold'>Animal</td>
                        <td class='fw-bold'>Nro. de Dosis</td>
                        <td class='fw-bold'>Aplicada</td>
                        <td class='fw-bold'>Prox. Dosis</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        //capturar todos los animales
                        require "modelo/conexion.php";

                        $query = "SELECT * FROM vacuna";
                        $resultado = $conexion->query($query);

                        while ($res = $resultado->fetch_assoc()){
                            $id      = $res['id'];
                            $animal  = $res['vacuna'];
                            $edad    = $res['id_animal'];
                            $peso    = $res['nro_dosis'];
                            $estado  = $res['aplicada'];
                            $emitido = $res['prox_dosis'];

                            $query = "SELECT e.animal FROM animal a LEFT JOIN especie e ON a.id_especie = e.id WHERE a.id = $id";
                            $nombre_animal = $conexion->query($query)->fetch_array()[0];

                            echo "
                            <tr>
                                <td>$id</td>
                                <td>$animal</td>
                                <td>$edad - $nombre_animal</td>
                                <td>$peso</td>
                                <td>$estado</td>
                                <td>$emitido</td>
                            </tr>
                            ";
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>