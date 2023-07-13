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
            <a href="index.php?pagina=inicio" class="active">Inicio</a>
            <a href="index.php?pagina=reportes">Reporte</a>
            <a href="index.php?pagina=registro-animal" >Registrar Animal</a>
            <a href="index.php?pagina=vacunacion">Registro de vacunas</a>
            <form action="sesion.php?q=logout.php" method="post">
                <input type="submit" class="boton-cerrar-sesion" value="Cerrar Sesion">
            </form>
        </div>
        </div>
        <div class="container-fluid p-5">
            <h3 class="ps-5">Panorama general</h3>
            <table class='styled-table'>
                <thead class='headTableForQuote'>
                    <tr>
                        <td class='fw-bold'>Código</td>
                        <td class='fw-bold'>Animal</td>
                        <td class='fw-bold'>Edad</td>
                        <td class='fw-bold'>Peso (kg)</td>
                        <td class='fw-bold'>Estado</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        //capturar todos los animales
                        require "modelo/conexion.php";

                        $query = "SELECT a.id, e.animal, a.edad, a.peso, a.estado FROM animal a LEFT JOIN especie e ON a.id_especie = e.id ";
                        $resultado = $conexion->query($query);

                        while ($res = $resultado->fetch_assoc()){
                            $id     = $res['id'];
                            $animal = $res['animal'];
                            $edad   = $res['edad'];
                            $peso   = $res['peso'];
                            $estado = $res['estado'];

                            echo "
                            <tr>
                                <td>$id</td>
                                <td>$animal</td>
                                <td>$edad</td>
                                <td>$peso</td>
                                <td>$estado</td>
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
