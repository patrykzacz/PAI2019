<?php


class AccountFarm extends AppController {
    protected $tmp = "accountFarm/accountFarm";
    public function __construct()
    {
        parent::__construct();

    }

    public function run(){
        $this->view->render($this->tmp);
    }

}