<?php
session_start();
if (!isset($_SESSION['email']) and !isset($_SESSION['role'])) {
    die('You are not logged in!');

}
?>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title> Offers</title>
    <link rel="Stylesheet" type="text/css" href="./Public/css/navbar.css"/>
    <link rel="Stylesheet" type="text/css" href="./Public/css/general.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>
<body>

<div class="container-fluid">
    <?php include(dirname(__DIR__) . '/Views/Common/navbar.php'); ?>
    <div class="row" style="height: 15%"></div>
    <div class="col-3 col-md-3 col-lg-3">
        <div class="row">
            <div class="ext-center">
                <ul class="list">
                    <head><h2><b>Filters</b></h2></head>
                    <li>
                        <input type="checkbox" name="vehicle1" value="fruits"> Fruits<br>
                    </li>
                    <li>
                        <input type="checkbox" name="vehicle1" value="vegetables"> Vegetables<br>
                    </li>
                </ul>
            </div>


        </div>
    </div>

        <div class="col-6 col-md-6 col-lg-6">

        </div>




    <div class="col-3 col-md-3 col-lg-3">
        <div class="ext-center" style="background: transparent; padding: 20px ">
            <ul class="list">
                <head><h2><b>Sory By</b></h2></head>
                <li>
                    <input type="checkbox" name="vehicle1" value="fruits"> Price<br>
                </li>
                <li>
                    <input type="checkbox" name="vehicle1" value="vegetables"> Date<br>
                </li>
                <li>
                    <input type="checkbox" name="vehicle1" value="vegetables"> Name<br>
                </li>
                <li>
                    <input type="checkbox" name="vehicle1" value="vegetables"> Vegetables<br>
                </li>


            </ul>
        </div>

    </div>


</div>

</body>
</html>