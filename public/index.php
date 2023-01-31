<?php

use App\Controllers\ClientasController;

require "vendor/autoload.php";

$clientas_controller = new ClientasController;

$clientas_controller->store([
    ":nombre" => "Diana",
    ":direccion" => "Calle Lopez Obrador",
    ":numero_bancario" => 346233498234532,
    ":puntos_cliente" => 10
]);

?>