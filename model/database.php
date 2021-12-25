<?php
    define('USERNAME', 'root');
    define('PASSWORD', '');
    define('SEVER', 'localhost');
    define('NAMEDB', 'demoDB');
   class dataBase{ 
     public $connection;

    public function __construct(){
            $this->connection = new mysqli(SEVER, USERNAME, PASSWORD,NAMEDB );
            if ($this->connection->connect_error){
                echo 'connection to database error!';
                die();
            }
        return $this->connection;
    }
}

    