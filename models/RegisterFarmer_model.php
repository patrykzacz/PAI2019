<?php


class RegisterFarmer_model extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function register()
    {


            $uname = $_POST['name'];
            $usurname = $_POST['surname'];
            $email = $_POST['email'];
            $psw = password_hash($_POST['psw'], PASSWORD_DEFAULT);
            $city = $_POST['city'];
            $street = $_POST['street'];
            $hnumber = $_POST['hnumber'];
            $zipcode = $_POST['zipcode'];
            $link = $this->db->connect();
            $role = "farmer";
            if ($link->connect_errno) {
                header("error ");
                echo "blad1";
                exit();
            } else {
                $sql = "Select email , cemail from sprawdz where email='$email' OR cemail='$email ' ";
                $stmt = $link->query($sql);

                $resultCheck = $stmt->num_rows;
                if ($resultCheck > 0) {
                    echo("<script LANGUAGE='JavaScript'>
                     window.alert('You have already an account ');
                     window.location.href='../RegisterFarmer';
                     </script>");
                } else {

                    $sql = "INSERT INTO farmer (`imie`, `nazwisko`, `email`, password, city, street, hnumber, zipcode,role ) 
                    VALUES('" . $uname . "','" . $usurname . "','" . $email . "','" . $psw . "','" . $city . "','" . $street . "','" . $hnumber . "','" . $zipcode . "','" . $role . "')";
                    $stmt = $link->query($sql);
                    if ($stmt === TRUE) {
                        session_start();
                        header("Location: http://127.0.0.1/projektPai/ ");
                    } else {
                        echo "error";
                        exit();
                    };
                }
            }
            mysqli_close($link);
        }


}