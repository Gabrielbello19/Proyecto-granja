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
               <input class="input-usuario" type="number" name="cedula" placeholder="Cedula.">
               <input class="input-usuario" type="text" name="usuario" placeholder="Nombre de usuario.">
               <input class="input-usuario" type="text" name="nombre" placeholder="Nombre.">
               <input class="input-usuario" type="text" name="apellido" placeholder="Apellido.">
               <input class="input-usuario" type="text" name="correo" placeholder="Correo.">
               <input class="input-usuario" type="password" name="contraseña" placeholder="Contraseña.">
               <input class="input-usuario" type="date" name="nacimiento" placeholder="Fecha de nacimiento.">
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