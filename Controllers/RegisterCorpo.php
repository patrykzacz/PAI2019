<?php


class RegisterCorpo extends Controller {

    protected $tmp = "registercorpo";
    public function __construct()
    {
        parent::__construct();

    }

    public function run(){
        $this->view->render($this->tmp);
    }


}