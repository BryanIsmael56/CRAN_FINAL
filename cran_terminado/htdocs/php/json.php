<?php

require_once __DIR__ . "/recibeJson.php";
require_once __DIR__ . "/lib/devuelveJson.php";

$json = recibeJson();
$saludo = $json->saludo ?? "";
$nombre = $json->nombre ?? "";

$resultado = $saludo . " " . $nombre;

devuelveJson($resultado);