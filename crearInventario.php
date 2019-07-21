<?php

require_once ("datos.php");

// INSERT

try {
    // conectar con la base de datos utilizando PDO
    $conn = new PDO("pgsql:host=$hostname;dbname=$database", $username, $password);
    // colocar el modo de error de PDO a 'excepción'
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // toma los valores entregados por la URL
    $nombre = $_REQUEST["nombre"];
    $cantidad = $_REQUEST["cantidad"];
    $precio_unitario = $_REQUEST["precio_unitario"];
    // consulta en sql
    $sql = "INSERT INTO inventario (nombre, precio_unitario, cantidad)
    VALUES (\"$nombre\", \"$precio_unitario\", \"$cantidad\");";

    // ejecución de la consulta
    $conn->exec($sql);
    // terminar conexión con base de datos
    $conn = null;
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>