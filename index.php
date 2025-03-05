<?php
// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    echo "<h1>Hola, $nombre!</h1>";
} else {
    // Si no se ha enviado el formulario, muestra el formulario
    echo '<h1>Bienvenido a la página PHP</h1>';
    echo '<form method="POST" action="">
            <label for="nombre">Ingresa tu nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            <input type="submit" value="Saludar">
          </form>';
}
?>
