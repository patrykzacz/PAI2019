<?php

class Admin_model extends Model
{

    public function __construct()
    {
        parent::__construct();
    }


    public function deleteUser($id){

        $conn = $this->db->connect();

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "DELETE FROM farmer WHERE id_farmer='$id'";

        if (mysqli_query($conn, $sql)) {
            $this->view->msg = "Deleted user with ID " . $id;
        } else {
            $this->view->msg = "Error deleting user: " . mysqli_error($conn);
        }

        header("Location:http://127.0.0.1/projektPai/adminView ");
    }

}

