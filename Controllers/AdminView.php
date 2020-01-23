<?php

class AdminView extends Controller
{
    protected $tmp = "admin";

    public function __construct()
    {
        parent::__construct();

    }

    public function run()
    {
        $this->view->render($this->tmp);
    }

    public function deleteUser($id)
    {
        $model = new Admin_model();
        $model->deleteUser($id);
    }

}