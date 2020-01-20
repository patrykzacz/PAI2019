<?php
define('registerchoose', registerchoose);

class RegisterChoose extends AppController {
    public function __construct()
    {
        parent::__construct();

    }

    public function run(){
        $this->view->render(registerchoose);
    }
}