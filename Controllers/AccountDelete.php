<?php


class AccountDelete extends Controller {
    protected $tmp = "accountFarm/accountDelete";
    public function __construct()
    {
        parent::__construct();

    }

    public function run(){
        $this->view->render($this->tmp);
    }

}