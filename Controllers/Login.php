<?php
define('login', login);
class Login extends AppController {
    public function __construct()
    {
        parent::__construct();

    }

    public function run(){
        $this->view->render(login);
    }

}