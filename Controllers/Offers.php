<?php
define('offers', offers);
class Offers extends AppController {
    protected $tmp = "offers";
    public function __construct()
    {
        parent::__construct();

    }

    public function run(){
        $this->view->render($this->tmp);
    }

}