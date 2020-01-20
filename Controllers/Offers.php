<?php
define('offers', offers);
class Offers extends AppController {
    public function __construct()
    {
        parent::__construct();

    }

    public function run(){
        $this->view->render(offers);
    }
}