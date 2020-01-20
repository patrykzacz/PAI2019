<?php

define('registercorpo', registercorpo);
class Corpo extends AppController {
    public function __construct()
    {
        parent::__construct();

    }

    public function run(){
        $this->view->render(registercorpo);
    }
}