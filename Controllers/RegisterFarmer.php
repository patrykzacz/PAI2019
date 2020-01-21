<?php

class RegisterFarmer extends AppController {
    protected $tmp = "registerfarmer";
    public function __construct()
    {
        parent::__construct();

    }

    public function run(){
        $this->view->render($this->tmp);
    }

}