<?php


class RegisterCorpo extends AppController {
    protected $tmp = "registercorpo";
    public function __construct()
    {
        parent::__construct();

    }

    public function run(){
        $this->view->render($this->tmp);
    }

}