<?php
define('news', news);
class News extends AppController {
    public function __construct()
    {
        parent::__construct();

    }

    public function run(){
        $this->view->render(news);
    }
}