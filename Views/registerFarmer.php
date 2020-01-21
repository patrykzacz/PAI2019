<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="Stylesheet" type="text/css" href="./Public/css/rfarmer.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="Stylesheet" type="text/css" href="./Public/css/register.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <title>RFarmer</title>
</head>
<nav class="n">
    <div class="col-12 col-md-12 justify-content-center align-items-center">
        <img class="minilogo" src="./Public/img/pear.png" alt="minilogo">
    </div>
</nav>
<body>
<div class="registerContainer">
    <div class="row" id="row80">
        <div class="col-2 col-md-6">
            <img class="corp" src="./Public/img/farm.png" alt="farmer">
        </div>
        <div class="col-10 col-md-6 ">
            <form class="form-signup" id="form" action="RegisterFarmer/register" method="post">
                <input type="text" placeholder="Enter Name" name="name" required><br>
                <input type="text" placeholder="Enter Surame" name="surname" required><br>
                <input type="text" placeholder="Enter Email" name="email" required><br>
                <input type="password" placeholder="Enter Password" name="psw" required><br>
                <input type="text" placeholder="Enter City" name="city" required><br>
                <input type="text" placeholder="Enter Street" name="street" required>
                <input type="text" placeholder="Enter House Number" name="hnumber" required>
                <input type="text" placeholder="Enter Zip Code" name="zipcode" required>
                <button type="submit" name="submit" >Register</button>
            </form>
        </div>
    </div>

</div>
</body>
