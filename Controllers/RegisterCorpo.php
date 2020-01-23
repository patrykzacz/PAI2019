<?php


class RegisterCorpo extends Controller {

    protected $tmp = "registercorpo";
    public function __construct()
    {
        parent::__construct();

    }

    public function run(){
        $this->view->render($this->tmp);
    }

    public function register()
    {
        require_once './models/RegisterCorpo_model.php';
        $model= new RegisterCorpo_model();
        $model->register();
    }

}