<?php


class AccountFarm extends Controller {
    protected $tmp = "accountFarm/accountFarm";
    public function __construct()
    {
        parent::__construct();

    }

    public function run(){
        $this->view->render($this->tmp);
    }

}