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
            <a href="index.php?pagina=inicio">Home</a>
            <a href="index.php?pagina=reportes">Reporte</a>
            <a href="index.php?pagina=registro-animal" class="active">Registrar Animal</a>
            <a href="index.php?pagina=vacunacion">Registro de vacunas</a>
        </div>
        <div class="container-fluid p-5">
            <h3 class="ps-5">Registrar animal</h3>
            <link rel="stylesheet" href="vista/css/menu.css">
            <div class="card p-5 bg-dark text-white">
            

                <form action="">
                <label>Yo he creado este reporte.</label>
                    <input id="yoCreeRep" type="checkbox" id="alguien-mas" checked>
                    <br>

                    <input id="yoCreeRep_t" type="text" placeholder="nuevo emisor" disabled>

                    <br>
                    <br>
                    <label> Especie:  </label><br>
                    <input type="text" name="especie" ><br>
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
                    <input class="boton-enviar" type="submit" value="Registrar">
                    
                </form>
            </div>
        </div>
        <script src="vista/js/form.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
