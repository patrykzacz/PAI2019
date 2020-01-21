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
<?php include(dirname(__DIR__) . '/Common/navbar.php'); ?>
<div class="container-fluid">
    <div class="row" style="height: 10%">
    </div>
    <div class="row justify-content-center">
        <?php include(dirname(__DIR__) . '/Common/accountButtonGruoup.php'); ?>
        <div class="col-lg-7 col-md-10 col-xs-12 account-edit">
            <form action="" method="post" class="form-horizontal highlight-errors address-form" id="addressForm" novalidate="novalidate">
                <h3>Enter Present Password</h3>
                <div class="form-group">
                    <div class="col-lg-9 col-sm-9">
                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Ex Password" maxlength="60">
                    </div>
                </div>
                <h3>Enter New Password</h3>
                <div class="form-group">
                    <div class="col-lg-9 col-sm-9">
                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="New Password" value="" maxlength="160">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-9 col-sm-9">
                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Confirm Password" value="" maxlength="160">
                    </div>
                </div>
                <a  href="Logout" >
                    <button id="register" type="button" style="width: 310px;">Reset Password</button>
                </a>
            </form>

        </div>


    </div>
</body>
</html>