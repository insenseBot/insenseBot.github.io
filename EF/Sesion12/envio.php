<?php
    $destino = "sl78781161@idat.edu.pe";
    $nombres = $_POST["names"];
    $correo = $_POST["email"];
    $comentarios = $_POST["message"];

    $contenido = "Nombres: " . $nombres . "\nCorreo: " . $correo  . "\nComentarios: " . $comentarios;
    mail($destino, "Mensaje", $contenido);

    echo "<script>alert('Gracias por su Mensaje');</script>";
    echo "<script>window.location.href = ('index.html');</script>";
?>