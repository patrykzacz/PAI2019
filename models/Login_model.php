<?php
class Login_model extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    public function login()
    {
        session_start();
        $errors = array();
        if (!isset($_SESSION['emailLogin'])) {
            if(isset(($_POST)['login'])) {
                $emailLogin = $_POST['email'];
                $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
                var_dump($password);
                $link = $this->db->connect();
                $result = $link->query("SELECT * FROM farmer WHERE password='$password' AND email='$emailLogin'");
                var_dump($result);
                    var_dump($result);
                    if ($result->num_rows == 1) {
                        $_SESSION['emailLogin'] = $emailLogin;
                        header('location: http://127.0.0.1/projektPai/news');
                    } else {
                        array_push($errors, "Wrong username/password combination");
                    }

            }
        } else {
            header('location: ../userviews/profile.php');
        }
    }
}
