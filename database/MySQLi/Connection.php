<?php

$server = "localhost";
$username = "root";
$password = "dba";
$database = "mercadona";

// ----- CONNECTION -----

//A. Estructura basasda en procedimientos
// $mysqli = mysqli_connect($server, $username, $password, $database);

//B. Estructura basda en POO
$mysqli = new mysqli($server, $username, $password, $database);

// ---- TEST CONNECTION -----

//A. Procedimientos
/* if (!$mysqli)
    die("Connection failed: " . mysqli_connect_error());
*/

//B. POO
if ($mysqli->connect_errno)
    die("Connection failed: {$mysqli->connect_error}");


// Esto nos ayuda a usar cualquier tipo de caracter en nuestras consultas xq las normaliza
$setnames = $mysqli->prepare("SET NAMES 'utf8'");
$setnames->execute();
var_dump($setnames);

?>