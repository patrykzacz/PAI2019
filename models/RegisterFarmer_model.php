<?php


class RegisterFarmer_model extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function register()
    {
        if (isset($_POST['submit'])) {

            $uname = $_POST['name'];
            $usurname = $_POST['surname'];
            $email = $_POST['email'];
            $psw = password_hash($_POST['psw'],PASSWORD_DEFAULT);
            $city = $_POST['city'];
            $street = $_POST['street'];
            $hnumber = $_POST['hnumber'];
            $zipcode = $_POST['zipcode'];
            $user = new User();
            $user->setEmail($email);
            $user->setName($uname);
            $user->setSurname($usurname);
            $user->setPassword($psw);

            var_dump($_POST);
            $sql = "Select id_farmer from farmer where imie=" . $uname;
            $link = $this->db->connect();

            if ($link->connect_errno) {
                header("error ");
                echo "blad1";
                exit();
            } else {
                $sql="Select id_farmer from farmer where email=".$email;
                $stmt = $link->query($sql);
                var_dump($stmt);

                $resultCheck = $stmt->num_rows;
                if ($resultCheck > 0) {
                    echo "Konto istnieje";
                    exit();
                } else {
                    echo "else";
                    $sql = "INSERT INTO farmer (`imie`, `nazwisko`, `email`, password, city, street, hnumber, zipcode) VALUES('" . $uname . "','" . $usurname . "','" . $email . "','" . $psw . "','" . $city . "','" . $street . "','" . $hnumber . "','" . $zipcode . "')";
                    $stmt = $link->query($sql);
                    var_dump($stmt);
                    if ($stmt === TRUE) {
                        $user->setId($link->insert_id);
                        session_start();
                        $_SESSION['user']= $user;
                        header("Location: http://127.0.0.1/projektPai/ ");
                    } else {
                        echo"error";
                        exit();
                    };
                }
            }
            mysqli_close($link);
        }

    }
}