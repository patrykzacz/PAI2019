<?php

class Login_model extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function login()
    {
        $conn = $this->db->connect();
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sqlpass = "SELECT email, role, password, id_farmer From farmer  WHERE email='$email'";
        $resulta = $conn->query($sqlpass);
        $row = $resulta->fetch_array(MYSQLI_NUM);
        $sqlpasscorpo = "SELECT cemail, role, password, id_corpo From corpo  WHERE cemail='$email'";
        $resultcorpo = $conn->query($sqlpasscorpo);
        $rowcorpo = $resultcorpo->fetch_array(MYSQLI_NUM);
        $sql = "Select email , cemail from sprawdz where email='$email' OR cemail='$email' ";
        $result = mysqli_query($conn, $sql);
        if (!is_null($row)) {
            if (mysqli_num_rows($result) > 0 && password_verify($password, $row[2])) {
                $email = $row[0];
                $role = $row[1];
                $id = $row[3];
                session_start();
                $_SESSION["email"] = $email;
                $_SESSION['role'] = $role;
                $_SESSION['id_user'] = $id;
                header("Location: ../News");
            }
        }
        if(!is_null($rowcorpo)){
            if (mysqli_num_rows($result) > 0 && password_verify($password, $rowcorpo[2])) {
                $email = $rowcorpo[0];
                $role = $rowcorpo[1];
                $id = $rowcorpo[3];
                session_start();
                $_SESSION["email"] = $email;
                $_SESSION['role'] = $role;
                $_SESSION['id_user'] = $id;
                header("Location: ../News");
            }

        }
        var_dump($rowcorpo);
    }


}