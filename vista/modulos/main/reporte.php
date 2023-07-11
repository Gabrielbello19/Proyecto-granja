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
            <a href="index.php?pagina=inicio">Home</a>
            <a href="index.php?pagina=reportes" class="active">Reporte</a>
            <a href="index.php?pagina=registro-animal" >Registrar Animal</a>
            <a href="index.php?pagina=vacunacion">Registro de vacunas</a>   
        </div>
        <div class="container-fluid p-5">
            <h3 class="ps-5">Crear Reporte</h3>
            <div class="card p-5 bg-dark text-white">
                <form action="">
                    <label>Yo he creado este reporte.</label>
                    <input type="checkbox" id="alguien-mas" checked>
                    <br>

                    <input type="text" placeholder="placeholder" disabled>

                    <br>
                    <br>
                    
                    <label>Tipo de revision </label>
                    <select name="animal" required>
                        <option> -- seleccione -- </option>
                        <option value="rutina"> Chequeo de rutina </option>
                        <option value="emergencia"> Chequeo de emergencia </option>
                        <option value="nacimiento"> Reporte de nacimiento </option>
                    </select>

                    <br>
                    <br>
                    
                    <label>Animal </label>
                    <select name="animal" required>
                        <option> -- seleccione -- </option>
                        <?php
                            //capturar todos los animales



                        ?>
                    </select>

                    <br>
                    <br>

                    <label>Descripcion</label>
                    <textarea name="mensaje" rows="10"></textarea>
                    <p>0/500</p>

                    <input type="submit" value="Enviar">
                </form>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
