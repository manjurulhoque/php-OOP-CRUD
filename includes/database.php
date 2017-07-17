<?php

require_once("config.php");

class Database
{
    public $connection;

    function __construct()
    {
        $this->open_db_connection();
    }


    public function open_db_connection()
    {
        $this->connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        if($this->connection->connect_errno)
        {
            die("Database connection failed badly" . mysqli_error());
        }
    }

    public function query($sql)
    {
        $result = mysqli_query($this->connection, $sql);

        if(!$result)
        {
            die(mysqli_error($this->connection));
            //return "Error";
        }
        else
        {
            return $result;
        }
    }

    public function escape_string($string)
    {
        return mysqli_real_escape_string($this->connection, $string);
    }

    public function the_insert_id()
    {
        return mysqli_insert_id($this->connection);
    }
}

$database = new Database();
?>
