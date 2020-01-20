<?php
define('registerfarm', registerfarm);
class RegisterFarmer extends AppController {
    public function __construct()
    {
        parent::__construct();

    }

    public function run(){
        $this->view->render(registerfarm);
    }
}