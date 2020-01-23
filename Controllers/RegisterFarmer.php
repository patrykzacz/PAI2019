<?php

class RegisterFarmer extends Controller {
    protected $tmp = "registerfarmer";
    public function __construct()
    {
        parent::__construct();

    }

    public function run(){
        require_once './models/RegisterFarmer_model.php';
        $model= new RegisterFarmer_Model();
        $this->view->render($this->tmp);
    }

    public function register()
    {
        require_once './models/RegisterFarmer_model.php';
        $model= new RegisterFarmer_Model();
        $model->register();
    }



}