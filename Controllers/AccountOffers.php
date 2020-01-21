<?php


class AccountOffers extends AppController {
    protected $tmp = "accountFarm/accountOffers";
    public function __construct()
    {
        parent::__construct();

    }

    public function run(){
        $this->view->render($this->tmp);
    }

}