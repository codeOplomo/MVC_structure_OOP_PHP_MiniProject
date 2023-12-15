<?php
//  require_once __DIR__ . '/../../vendor/autoload.php';

//require __DIR__ . '../vendor/autoload.php';





require __DIR__ . '/../../vendor/autoload.php';


$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->load();


class Database
{
    private static $instance = null;
    private $connection;

    private function __construct()
    {
        // $dotenv = \Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
        // $dotenv->load();

        // $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
        // try {
        //     $dotenv->load();
        // } catch (Dotenv\Exception\InvalidPathException $e) {
        //     echo $e->getMessage();
        // }

        $this->connection = new mysqli($_ENV["DB_HOST"], $_ENV["DB_USERNAME"], $_ENV["DB_PASSWORD"], $_ENV["DB_DATABASE"]);

        if ($this->connection->connect_error) {
            throw new Exception("Connection failed: " . $this->connection->connect_error);
        }
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            try {
                self::$instance = new Database();
            } catch (Exception $e) {
                throw $e;
            }
        }
        return self::$instance;
    }

    public function getConnection()
    {
        return $this->connection;
    }


    // public function closeConnection() {
    //     if ($this->connection !== null) {
    //         $this->connection->close();
    //         $this->connection = null;
    //         self::$instance = null;
    //     }
    // }

    
}
?>