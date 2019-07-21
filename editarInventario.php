<?php

require_once ("datos.php");

// UPDATE



try {
    // conectar con la base de datos utilizando PDO
    $conn = new PDO("pgsql:host=$hostname;dbname=$database", $username, $password);
    // colocar el modo de error de PDO a 'excepción'
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // obtener valores de la URL
    $codigo = $_REQUEST["codigo"];
    $nombre = $_REQUEST["nombre"];
    $cantidad = $_REQUEST["cantidad"];
    $precio_unitario = $_REQUEST["precio_unitario"];
    // consulta en SQL
    $sql = "UPDATE inventario SET nombre='$nombre', precio_unitario='$precio_unitario', cantidad='$cantidad' WHERE codigo=$codigo;";

    // ejecución de la consulta
    $conn->exec($sql);

    // terminar conexión con base de datos
    $conn = null;
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>