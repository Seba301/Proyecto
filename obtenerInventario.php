<?php

require_once ("datos.php");

// SELECT

try {
    // conectar con la base de datos utilizando PDO
    $conn = new PDO("pgsql:host=$hostname;dbname=$database", $username, $password);
    // colocar el modo de error de PDO a 'excepción'
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // código en sql a ejecutar
    // - toma todos los nombres y descripciones desde la tabla tareas
    $sql = "SELECT codigo, nombre, precio_unitario, cantidad FROM inventario
    ";

    // envia la consulta (query) y guarda el resultado como un arreglo (fetchAll)
    $data = $conn->query($sql)->fetchAll();

    // respuesta utilizando los datos obtenidos
    echo "
    <table id='inventario' border= 1;>
    <tr>
    <th>Codigo</th>
    <th>Nombre</th>
    <th>Cantidad</th>
    <th>Precio Unitario</th>
    <th style='width: 20%;'>Acciones</th>
    </tr>";

    foreach ($data as $row) {
        echo "<tr>";
        echo "<td>" . $row["codigo"] . "</td>";
        echo "<td>" . $row["nombre"] . "</td>";
        echo "<td>" . $row["cantidad"] . "</td>";
        echo "<td>" . $row["precio_unitario"] . "</td>";
        echo "<td>";
        echo "<button onclick='editarTarea(this)'>Editar tareas</button>";
        echo "<button onclick='eliminarTarea(this)'>Eliminar tareas</button>";
        echo "</td>";
        echo "</tr>";
    }

    echo "</table>";

    // terminar conexión con base de datos
    $conn = null;
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>