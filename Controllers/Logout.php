<?php

define('logout', logout);
class Logout extends AppController {
    public function __construct()
    {
        parent::__construct();

    }

    public function run(){
        $this->view->render(logout);
    }

}