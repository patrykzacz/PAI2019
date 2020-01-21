<?php
require_once './models/User.php';
require_once './Repository/UserRepository.php';
class Login extends Controller
{
    protected $tmp = "login";

    public function __construct()
    {
        parent::__construct();

    }

    public function run()
    {   require_once './models/login_model.php';
        $model= new Login_model();
        $this->view->render($this->tmp);
    }


    public function login()
    {
        $link = $this->db->connect();
        $sql = "SELECT * FROM farmer WHERE email = 'roman@vifon.com'";
        $row = mysqli_query($link, $sql);
        $row->fetch_all();
        foreach ($row as $r) {
            var_dump($r);
        }


    }
}