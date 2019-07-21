<?php

require_once ("datos.php");
// DELETE


try {
    // conectar con la base de datos utilizando PDO
    $conn = new PDO("pgsql:host=$hostname;dbname=$database", $username, $password);
    // colocar el modo de error de PDO a 'excepción'
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // obtiene el valor de la URL
    $codigo = $_REQUEST["codigo"];

    // consulta en SQL
    $sql = "DELETE FROM inventario WHERE codigo=$codigo;";

    // ejecución de la consulta
    $conn->exec($sql);

    // terminar conexión con base de datos
    $conn = null;
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>