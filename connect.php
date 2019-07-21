<?php

require_once ("datos.php");

// Base de conectar

try {
    // conectar con la base de datos utilizando PDO
    $conn = new PDO("pgsql:host=$hostname;dbname=$database", $username, $password);
    // colocar el modo de error de PDO a 'excepción'
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // acciones a realizar en la base de datos
    echo "Conectado";

    // terminar conexión con base de datos
    $conn = null;
} catch (PDOException $e) {
    // imprime el mensaje del error
    echo "Error: " . $e->getMessage();
}
