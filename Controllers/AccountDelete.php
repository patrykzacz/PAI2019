<?php


class AccountDelete extends AppController {
    protected $tmp = "accountFarm/accountDelete";
    public function __construct()
    {
        parent::__construct();

    }

    public function run(){
        $this->view->render($this->tmp);
    }

}