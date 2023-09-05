<?php

/**
 *
 */
class Database
{
    private static $instance;
    private $connection;

    function __construct()
    {
       $this->connection = new mysqli(
           "localhost",
           "root",
           "root",
           "farmer"
       );
        if (!$this->connection) {
            die('Connection Error' . mysqli_connect_error());
        }
    }

    public static function getInstance()
    {
        if (!self::$instance)
            self::$instance = new self();
        return self::$instance;
    }

    public function getConnection()
    {
        $this->connection->set_charset('utf8');
        return $this->connection;
    }
}


?>
