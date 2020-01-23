<?php

class Login extends Controller
{
    protected $tmp = "login";

    public function __construct()
    {
        parent::__construct();

    }

    public function run()
    {
        $this->view->render($this->tmp);
    }


    public function login()
    {
        $model = new Login_model();
        $model->login();
    }



}