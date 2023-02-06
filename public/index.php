<?php

use App\Controllers\ClientaController;

require "vendor/autoload.php";

$clientas_controller = new ClientaController;

$clientas_controller->store([
    "nombre" => "Georgette",
    "direccion" => "Calle Pikachu",
    "numero_bancario" => 678736233498234532,
    "puntos_cliente" => 100
]);

?>