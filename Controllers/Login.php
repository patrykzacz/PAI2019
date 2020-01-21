<?php

class Login extends AppController {
    protected $tmp = "login";
    public function __construct()
    {
        parent::__construct();

    }

    public function run(){
        $this->view->render($this->tmp);
    }

}