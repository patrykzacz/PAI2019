<?php

require_once '../Database.php';

$db = new Database();
$conn = $db->connect();

if(isset($_POST['email'])){
    $email = $_POST['email'];

    $sql = "Select count(*) as emails from sprawdz where email='$email' OR cemail='$email ' ";

    $result = mysqli_query($conn,$sql);
    $response = "<span style='color: green;'>Available.</span>";
    if(mysqli_num_rows($result)){
        $row = mysqli_fetch_array($result);

        $count = $row['emails'];

        if($count > 0){
            $response = "<span style='color: red;'>Not Available.</span>";
        }

    }

    echo $response;
    die;
}