<?php

Class Controller
{

    public function __construct()
    {
        $this->view = new View();
        $this->db=new Database();

    }
    public function loadModel($name)
    {
        $path = 'models/' . $name . '_model.php';
        if (file_exists($path)) {
            require 'models/' . $name . '_model.php';;

            $modelName = $name . '_Model';
            $this->model = new $modelName();
        }
    }


}