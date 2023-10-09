<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $contrasena = $_POST["contrasena"];

    // Abre o crea un archivo para guardar los datos
    $archivo = fopen("usuarios.txt", "a");

    if ($archivo) {
        // Escribe los datos en el archivo
        fwrite($archivo, "Nombre: " . $nombre . "\n");
        fwrite($archivo, "Correo: " . $email . "\n");
        fwrite($archivo, "Contraseña: " . $contrasena . "\n\n");

        // Cierra el archivo
        fclose($archivo);

        echo "Los datos se han guardado correctamente.";
    } else {
        echo "No se pudo abrir el archivo para guardar los datos.";
    }
}
?>