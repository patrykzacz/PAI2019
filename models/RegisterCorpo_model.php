<?php
session_start();

class RegisterCorpo_model extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function register()
    {

        if (isset($_POST['git'])) {
            $cname = $_POST['name'];
            $email = $_POST['email'];
            $psw = password_hash($_POST['psw'], PASSWORD_DEFAULT);
            $city = $_POST['city'];
            $street = $_POST['street'];
            $zipcode = $_POST['zipcode'];
            $hnumber = $_POST['hnumber'];
            $nip = $_POST['nip'];
            $number = $_POST['number'];
            $link = $this->db->connect();
            $role = "corpo";
            if ($link->connect_errno) {
                header("error ");
                echo "blad polaczenia z baza ";
                exit();
            } else {
                $sql = "Select email , cemail from sprawdz where email='$email' OR cemail='$email ' ";
                $stmt = $link->query($sql);

                $resultCheck = $stmt->num_rows;
                if ($resultCheck > 0) {
                    echo("<script LANGUAGE='JavaScript'>
                     window.alert('You have already an account ');
                     window.location.href='../RegisterCorpo';
                     </script>");
                } else {
                    $sql = "INSERT INTO corpo (name, cemail, password , city, street, zipcode, hnumber, nip , cnumber, role) 
                    VALUES('" . $cname  . "','" . $email . "','" . $psw . "','" . $city . "','" . $street . "','" . $zipcode . "','" . $hnumber . "','" . $nip . "','" .$number. "','" . $role. "')";
                    $stmt = $link->query($sql);
                    if ($stmt === TRUE) {
                        session_start();
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