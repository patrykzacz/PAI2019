<?php
<<<<<<< HEAD


=======
>>>>>>> origin/master
class RegisterFarmer_model extends Model
{

    public function __construct()
    {
<<<<<<< HEAD
        parent::__construct();
    }

    public function register()
    {
=======
    parent::__construct();
    }

    public function register(){
>>>>>>> origin/master
        if (isset($_POST['submit'])) {

            $uname = $_POST['name'];
            $usurname = $_POST['surname'];
            $email = $_POST['email'];
<<<<<<< HEAD
            $psw = password_hash($_POST['psw'],PASSWORD_DEFAULT);
=======
            $psw = $_POST['psw'];
>>>>>>> origin/master
            $city = $_POST['city'];
            $street = $_POST['street'];
            $hnumber = $_POST['hnumber'];
            $zipcode = $_POST['zipcode'];
<<<<<<< HEAD
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
=======

            $sql = "Select id_farmer from farmer where id_farmer=?";
            $link = $this->db->connect();
            $stmt = mysqli_stmt_init($link);

            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("error ");
                exit();
            } else {
                mysqli_stmt_bind_param($stmt, "s", $uname);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                $resultCheck = mysqli_stmt_num_rows($stmt);
                if ($resultCheck > 0) {
                    header("");
                } else {
                    $sql = "INSERT INTO farmer (imie, nazwisko,mail,password,city,street,hnumber,zipcode) VALUES(?,?,?,?,?,?,?,?)";
                    $stmt = mysqli_stmt_init($link);
                    if (!mysqli_stmt_prepare($stmt, $sql)){
                        header("error ");
                        exit();
                    }else {

                        $hasPwd = password_hash($psw, PASSWORD_DEFAULT);
                        mysqli_stmt_bind_param($stmt, "ssssssss", $uname, $usurname, $email, $hasPwd, $city, $street, $hnumber, $zipcode);
                        mysqli_stmt_execute($stmt);
                        header("Location: http://127.0.0.1/projektPai/ ");
                    };
                }
            }echo 87;
            mysqli_stmt_close($stmt);
>>>>>>> origin/master
            mysqli_close($link);
        }

    }
}