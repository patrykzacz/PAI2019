<?php

require_once './models/User.php';
class UserRepository extends Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function getUser(string $email): ?User
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $link= $this->db->connect();
        $sql= "SELECT * FROM users WHERE email = :email";
        $row =mysqli_query($link,$sql);
        $user= $row->fetch_array();


        if($user == false) {
            return null;
        }

        return new User(
            $user['email'],
            $user['password'],
            $user['name'],
            $user['surname'],
            $user['id']
        );
    }

    public function getUsers(): array {


        // foreach ($users as $user) {
        //     $result[] = new User(
        //         $user['email'],
        //         $user['password'],
        //         $user['name'],
        //         $user['surname'],
        //         $user['id']
        //     );
        // }


    }
}