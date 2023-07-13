<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="vista/css/style.css">
        <link rel="stylesheet" href="vista/css/navbar.css">
        <title>Registrar animal</title>
    </head>
    <body>
        <div class="topnav">
            <img src="vista/img/logo.png" width="50">
            <a href="index.php?pagina=inicio">Inicio</a>
            <a href="index.php?pagina=reportes">Reporte</a>
            <a href="index.php?pagina=registro-animal" class="active">Registrar Animal</a>
            <a href="index.php?pagina=vacunacion">Registro de vacunas</a>
            <form action="sesion.php?q=logout" method="post">
                <input type="submit" class="boton-cerrar-sesion" value="Cerrar Sesion">
            </form>
        </div>
        <div class="container-fluid p-5">
            <h3 class="ps-5">Registrar animal</h3>
            <link rel="stylesheet" href="vista/css/menu.css">
            <div class="card p-5 bg-dark text-white">
            

                <form action="index.php?pagina=registro-animal" method='post'>
                    <?php
                        require "modelo/conexion.php";

                        if($_POST){
                            if ((isset($_POST['animal']) || isset($_POST['nuevo_animal'])) && isset($_POST['edad']) && isset($_POST['peso']) && isset($_POST['estado'])){
                                $animal = $_POST['animal'];
                                $edad = $_POST['edad'];
                                $peso = $_POST['peso'];
                                $estado = $_POST['estado'];
                                $ult_rev = $_POST['ult_revision'];
                                $prox_rev = $_POST['prox_revision'];

                                if(!isset($_POST['nuevo_animal'])){

                                    $query = "INSERT INTO animal (id_especie, edad, peso, estado, ult_revision, prox_revision) VALUES ('$animal', $edad, '$peso', '$estado', '$ult_rev', '$prox_rev')";
                                    $respuesta = $conexion->query($query);

                                }
                                else{

                                    $nuevo_animal = $_POST['nuevo_animal'];

                                    $query = "INSERT INTO especie (animal) VALUES ('$nuevo_animal')";
                                    $respuesta = $conexion->query($query);

                                    $query = "SELECT id FROM especie WHERE animal = '$nuevo_animal'";
                                    $respuesta = $conexion->query($query);
                                    
                                    $animal = $respuesta->fetch_assoc()['id'];

                                    $query = "INSERT INTO animal (id_especie, edad, peso, estado) VALUES ('$animal', $edad, '$peso', '$estado')";
                                    $respuesta = $conexion->query($query);
                                }


                                if($respuesta){
                                    echo "<script>alert('El animal se ha registrado correctamente')</script>";
                                }
                            }
                        }
                    ?>
                    

                    <label> Especie:  </label><br>
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
                    <br>

                    <label>Nueva especie</label>
                    <input id="nuevaEspecie" type="checkbox" id="alguien-mas">
                    <br>
                    <input id="nuevaEspecie_t" type="text" name="nuevo_animal" placeholder="nombre de la especie" >
                    
                    <br>
                    <br>

                    <label> Edad:  </label><br>
                    <input type="number" name="edad" ><br>
                    <br>
                    <label> Peso (kg):  </label><br>
                    <input  id="inputPeso" name="peso" type="number" step="0.1" placeholder="0.0" min="0" /> <br>
                    <br>
                    <label> Estado:  </label><br>
                    <input type="text" name="estado" ><br>
                    <br>
                    <label> Ultima revision:  </label><br>
                    <input type="date" name="ult_revision" ><br>
                    <br>
                    <label> Proxima revision:  </label><br>
                    <input type="date" name="prox_revision" ><br>
                    <br>
                    <input class="submit" type="submit" value="Registrar">
                    
                </form>
            </div>
        </div>
        <script src="vista/js/form.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
