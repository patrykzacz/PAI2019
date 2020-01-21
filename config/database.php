<?php
require 'config.php';
class database
{
    private $HOST = DB_HOST;
    private $PORT = DB_PORT;
    private $DBUSER = DB_USER;
    private $DBPASS = DB_PASS;
    private $DBNAME = DB_NAME;

    public function __construct()
    {
        $this->HOST = DB_HOST;
        $this->PORT = DB_PORT;
        $this->DBUSER = DB_USER;
        $this->DBPASS = DB_PASS;
    }
    function connect()
    {
        $connect = mysqli_connect($this->HOST . ":" . $this->PORT, $this->DBUSER, $this->DBPASS, $this->DBNAME);
        if (!$connect) {
            echo mysqli_errno($connect) or die();
        }
        return $connect;

    }
}

$conn = new database();
$link = $conn->connect();
$sql= "Select * from farmer";
$row =mysqli_query($link,$sql);
$row->fetch_array();
foreach ($row as $r)
{
    var_dump($r);
}


