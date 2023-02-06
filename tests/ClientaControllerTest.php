<?php

use App\Controllers\ClientaController;
use App\Controllers\ClientasController;
use PHPUnit\Framework\TestCase;

class ClientaControllerTest extends TestCase{

    function test_clienta_insersion_bd_ok(){
    /**
     * CASO 1
     * Given - Dado un array con los datos de la clienta [nombre, driección, numero_bancario, puntos_clienta]
     * When - Cuando se almacene de manera correcta en la bd
     * Then - Entonces retorna un True
    */

    // Arrange : Escenario
    $insert_clienta = new ClientaController; // ---> la caja negra
    $datos_entrada = [                      
        "nombre" => "Mariela",
        "direccion" => "Calle Argañosa",
        "numero_bancario" => 3456786233498234532,
        "puntos_cliente" => 80
    ];
    $datos_salida_esperados = [true, 
    "Los datos de '{$datos_entrada["nombre"]}' fueron insertados correctamente "];

    //Act : Ejecuto mi escenario de la caja negra llamo un método
    $datos_salida_reales= $insert_clienta->store($datos_entrada);

    //Assert : Comprobar /comparar el escenario
    $this->assertEquals($datos_salida_esperados, $datos_salida_reales);
    }
}

?>