<?php
session_start();

class Contact_model extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function sendMessage()
    {
        if (isset($_POST['contact-form'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            $subject = $_POST['subject'];
            $id = $_SESSION['id_user'];
            $conn = $this->db->connect();
            header('Content-Type: application/json');
            if ($name === '') {
                print json_encode(array('message' => 'Name cannot be empty', 'code' => 0));
                exit();
            }
            if ($email === '') {
                print json_encode(array('message' => 'Email cannot be empty', 'code' => 0));
                exit();
            } else {
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    print json_encode(array('message' => 'Email format invalid.', 'code' => 0));
                    exit();
                }
            }
            if ($subject === '') {
                print json_encode(array('message' => 'Subject cannot be empty', 'code' => 0));
                exit();
            }
            if ($message === '') {
                print json_encode(array('message' => 'Message cannot be empty', 'code' => 0));
                exit();
            }

            if ($conn->connect_errno) {
                header("error ");
                echo "blad polaczenia z baza ";
                exit();
            }
            $sql = "INSERT INTO messages (name, email, subject , message ) 
                    VALUES('" . $name . "','" . $email . "','" . $subject . "','" . $message . "')";
            $stmt = $conn->query($sql);
            mysqli_close($conn);
            if ($stmt) {
                print json_encode(array('message' => 'Email successfully sent!', 'code' => 1));
                exit();
            } else {
                print json_encode(array('message' => 'Email was not successfully sent!', 'code' => 0));
                exit();
            }
        }
    }




}









