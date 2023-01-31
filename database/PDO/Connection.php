<?php
namespace Database\PDO;
require_once ("vendor/autoload.php");
use Dotenv\Dotenv;

class Connection{

    private static $instance;
    private $connection;

    private function __construct()
    {
        $this->make_connection();
    }

    // Patron de diseño SINGLETON
    public static function getInstance()
    {
        if(!self::$instance instanceof self)
            self::$instance = new self();
        return self::$instance;
    }

    private function make_connection()
    {
        $dotenv = Dotenv::createImmutable(__DIR__ . '../../../');
        $dotenv->load();

        $server = $_ENV["DB_SERVER"];
        $username = $_ENV["DB_USERNAME"];
        $password = $_ENV["DB_PASSWORD"];
        $database = $_ENV["DB_DATABASE"];
        

        // ----- CONNECTION -----

        $connectionPDO = new \PDO("mysql:host=$server;dbname=$database", $username, $password);

        // Esto nos ayuda a usar cualquier tipo de caracter en nuestras consultas xq las normaliza
        $setnames = $connectionPDO->prepare("SET NAMES 'utf8'"); 
        $setnames->execute();
        
        $this->connection = $connectionPDO;
        var_dump($setnames);
    }

    public function get_instance_database(){
        return $this->connection;
    }
}

?>