<?php


class RegisterChoose extends AppController {
    protected $tmp = "registerchoose";
    public function __construct()
    {
        parent::__construct();

    }

    public function run(){
        $this->view->render($this->tmp);
    }

}