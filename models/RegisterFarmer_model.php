<?php
class RegisterFarmer_model extends Model
{

    public function __construct()
    {
    parent::__construct();
    }

    public function register(){
        if (isset($_POST['submit'])) {

            $uname = $_POST['name'];
            $usurname = $_POST['surname'];
            $email = $_POST['email'];
            $psw = $_POST['psw'];
            $city = $_POST['city'];
            $street = $_POST['street'];
            $hnumber = $_POST['hnumber'];
            $zipcode = $_POST['zipcode'];

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
            mysqli_close($link);
        }

    }
}