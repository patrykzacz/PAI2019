<?php
require_once 'config.php';

class Database
{

    public function __construct()
    {
        $this->HOST = DB_HOST;
        $this->PORT = DB_PORT;
        $this->DBUSER = DB_USER;
        $this->DBPASS = DB_PASS;
        $this->DBNAME = DB_NAME;
        $this->DBPORT = DB_PORT;
    }

    function connect()
    {
        $db = mysqli_connect($this->HOST . ":" . $this->PORT, $this->DBUSER, $this->DBPASS, $this->DBNAME);
        if (!$db) {
            echo mysqli_errno($db) or die();
        }
        return $db;

    }


}

