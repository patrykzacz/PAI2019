<?php


class Logout extends Controller {
    protected $tmp = "logout";
    public function __construct()
    {
        parent::__construct();

    }

    public function run(){
        $this->view->render($this->tmp);
    }

}