<?php

use App\Controllers\ClientaController;

require "vendor/autoload.php";

$clientas_controller = new ClientaController;

$clientas_controller->store([
    "nombre" => "Diana",
    "direccion" => "Calle Lopez Obrador",
    "numero_bancario" => 346233498234532,
    "puntos_cliente" => 10
]);

?>