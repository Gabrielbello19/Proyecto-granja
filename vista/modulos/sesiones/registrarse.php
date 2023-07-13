<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registrarte</title>
        <link rel="stylesheet" href="vista/css/menu.css">
        
    </head>
    <body>
        <div class="contenedor">
        <form action="sesion.php?q=register_user" method='post'>
               <h1>Registrate.</h1>
               <input class="input-usuario" type="number" name="cedula" placeholder="Cedula." required>
               <input class="input-usuario" type="text" name="usuario" placeholder="Nombre de usuario." required>
               <input class="input-usuario" type="text" name="nombre" placeholder="Nombre."required>
               <input class="input-usuario" type="text" name="apellido" placeholder="Apellido." required>
               <input class="input-usuario" type="text" name="correo" placeholder="Correo." required>
               <input class="input-usuario" type="password" name="contraseña" placeholder="Contraseña." required>
               <label>Fecha de nacimiento:</label>
               <br>
               <input class="input-usuario" type="date" name="nacimiento" placeholder="Fecha de nacimiento." required>
               <input class="boton-enviar" type="submit" value="Registrar">
         </form>
        </div>
    </body>
</html>