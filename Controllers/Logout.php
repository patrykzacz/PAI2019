<?php


class Logout extends AppController {
    protected $tmp = "logout";
    public function __construct()
    {
        parent::__construct();

    }

    public function run(){
        $this->view->render($this->tmp);
    }

}