<?php
session_start();
if(!isset($_SESSION['email']) and !isset($_SESSION['role'])) {
    die('You are not logged in!');
}

?>

<html>
<head>
    <meta charset="UTF-8">
    <title> Test</title>
    <link rel="Stylesheet" type="text/css" href="./Public/css/navbar.css" />
    <link rel="Stylesheet" type="text/css" href="./Public/css/general.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>
<body>
<div class="container-fluid">
    <?php include(dirname(__DIR__).'/Views/Common/navbar.php'); ?>
    <div class="row" style="height: 15%"></div>
    <div class="row justify-content-center">
        <div class="col-1 col-md-1 col-lg-1" STYLE="margin: AUTO">
        </div>
        <div class="col-5 col-md-5 col-lg-5" style="background: white">
            <div class="card" style="width: 100%; height: auto">
                <img  class="card-img-top i" src="./Public/img/strawberries.png" style="height: auto; width: auto" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content .</p>
                </div>
            </div>
        </div>
        <div class="col-1 col-md-1 col-lg-1"> </div>
        <div class="col-4 col-md-4 col-lg-4" >
            <div class="row">
                <div class="card card1" style="width:100%; height:  auto;">
                    <img class="card-img-top" src="./Public/img/strawberries.png"  style="height: 10rem" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Wzrost cen</h5>
                        <p class="card-text">Truskawki drożeją jak wszystko w tym kraju.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card card1" style="width: 100%; height: auto">
                    <img class="card-img-top" src="./Public/img/onion.png" style="height: 10rem" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card card1" style="width: 100%; height: auto">
                    <img class="card-img-top" src="./Public/img/three.png" style="height: 10rem" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">A Ja prosze tylko o 3</h5>
                        <p class="card-text">3!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

</body>

</html>