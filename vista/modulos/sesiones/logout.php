<?php
    session_start();
    session_destroy();

    echo '<script>alert("sesion cerrada")</script>';

    header('location: http://localhost/proyecto-granja/index.php');
?>
