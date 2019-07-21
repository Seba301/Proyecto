<?php

$datos['unap'] = [
    'hostname' => "magallanes.inf.unap.cl",
    'database' => "tnscigrupo1",
    'username' => "tnscigrupo1",
    'password' => "tnsci2019a1a",
];

$datos['aws'] = [
    'hostname' => "database-1.cic2ioo6cjsm.us-east-1.rds.amazonaws.com",
    'database' => "proyecto",
    'username' => "schipoco",
    'password' => "Homero123",
];

$source = "unap";
$hostname = $datos[$source]['hostname'];
$database = $datos[$source]['database'];
$username = $datos[$source]['username'];
$password = $datos[$source]['password'];