<?php

class Offers extends Controller {
    protected $tmp = "offers";
    public function __construct()
    {
        parent::__construct();

    }

    public function run(){
        $this->view->render($this->tmp);
    }

}