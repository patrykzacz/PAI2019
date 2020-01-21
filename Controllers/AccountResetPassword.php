<?php


class AccountResetPassword extends Controller {
    protected $tmp = "accountFarm/AccountResetPassword";
    public function __construct()
    {
        parent::__construct();

    }

    public function run(){
        $this->view->render($this->tmp);
    }

}