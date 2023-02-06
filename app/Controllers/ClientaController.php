<?php
namespace App\Controllers;

use Database\PDO\Connection;
use Exception;

class ClientaController{

    /**
     * INDEX: muestra la lista de todos los registros que tenemos
    */

    public function index()
    {

    }

    /**
     * CREATE: muestra un formulario para ingresar un nuevo registro
     */

    public function create()
    {

    }

     /**
     * STORE: registra en la base de datos lo que recibe del create
     */
    public function store($data)
    {
        $connection = Connection::getInstance()->get_instance_database();
        
        //evitando SQL injection //seguridad
        /*$rows_affected = $connection->prepare("INSERT INTO clientas (nombre, direccion,
        numero_bancario, puntos_cliente) VALUES(:nombre, :direccion, :numero_bancario, :puntos_cliente)");
        */
        $rows_inserted = $connection->exec("INSERT INTO clientas (nombre, direccion, 
        numero_bancario, puntos_cliente) VALUES(
            '{$data["nombre"]}',
            '{$data["direccion"]}',
            {$data['numero_bancario']},
            {$data['puntos_cliente']}
            )");
        var_dump($rows_inserted);
        try{
            if ($rows_inserted > 0){
                $response = "Los datos de '{$data["nombre"]}' fueron insertados correctamente ";
                return [$rows_inserted, $response];
            }  
        }
        catch(Exception $e){
            echo "Hubo un error durante la inserción del registro de: {$data["nombre"]}. " . $e->getMessage();
        }  
    }

    /**
     * SHOW: muestra un registro específico
     */
    public function show()
    {

    }

    /**
     * EDIT: muestra un formulario para editar un registro
     */
    public function edit()
    {

    }

    /**
     * UPDATE: actualizar el registro dentro de la base de datos
     */
    public function update()
    {

    }

    /**
     * DESTROY: eliminar el registro
    */
    public function destroy()
    {

    }

}

?>
