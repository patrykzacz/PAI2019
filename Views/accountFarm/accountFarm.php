<?php
session_start();
if(!isset($_SESSION['email']) and !isset($_SESSION['role'])) {
    die('You are not logged in!');
}

?>
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
        <?php include(dirname(__DIR__) . '/Common/accountButtonGruoup.php');

        if($_SESSION['role']== 'farmer') {
            echo"
               <div class=\"col-lg-7 col-md-10 col-xs-12 account-edit\">
            <form action=\"\" method=\"post\" class=\"form-horizontal highlight-errors address-form\" id=\"addressForm\" novalidate=\"novalidate\">
                <h3>Dane adresowe</h3>
                <div class=\"form-group\">
                    <label for=\"firstName\" class=\"col-lg-3 col-sm-2 control-label\">Imię</label>
                    <div class=\"col-lg-9 col-sm-9\">
                        <input type=\"text\" class=\"form-control\" id=\"firstName\" name=\"firstName\" value=\"Patryk\" maxlength=\"60\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"lastName\" class=\"col-lg-3 col-sm-2 control-label\">Nazwisko</label>
                    <div class=\"col-lg-9 col-sm-9\">
                        <input type=\"text\" class=\"form-control\" id=\"lastName\" name=\"lastName\" value=\"Zaczkiewicz\" maxlength=\"160\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"street\" class=\"col-lg-3 col-sm-2 control-label col-xl-2 col-xl-offset-1\">Adres </label>
                    <div class=\"col-lg-9 col-sm-9\">
                        <input type=\"text\" class=\"form-control\" id=\"street\" name=\"street\" value=\"Ambrożów 14A\"  maxlength=\"200\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <div class=\"form-xs-group\">
                        <label for=\"postcode\" class=\"col-lg-3 col-xs-12  col-sm-2 control-label col-xl-2 col-xl-offset-1\">Kod pocztowy</label>
                        <div class=\"col-xs-4 col-xs-6 col-sm-2 col-lg-2\">
                            <input type=\"text\" class=\"form-control\" id=\"postcode\" name=\"postcode\" value=\"27-225\" maxlength=\"6\">
                        </div>
                    </div>
                    <label for=\"city\" class=\"control-label col-xs-12 col-sm-2 col-lg-2\">Miejscowość</label>
                    <div class=\"col-xs-12 col-sm-5 col-lg-5\">
                        <input type=\"text\" class=\"form-control\" id=\"city\" name=\"city\" value=\"Pawłów\" maxlength=\"60\">
                    </div>
                </div>
       

        </div>";
        }
        if($_SESSION['role']== 'corpo')
        {echo"   <div class=\"col-lg-7 col-md-10 col-xs-12 account-edit\">
            <form action=\"\" method=\"post\" class=\"form-horizontal highlight-errors address-form\" id=\"addressForm\" novalidate=\"novalidate\">
                <h3>Dane adresowe</h3>
                <div class=\"form-group\">
                    <label for=\"firstName\" class=\"col-lg-3 col-sm-2 control-label\">Imię</label>
                    <div class=\"col-lg-9 col-sm-9\">
                        <input type=\"text\" class=\"form-control\" id=\"firstName\" name=\"firstName\" value=\"Patryk\" maxlength=\"60\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"lastName\" class=\"col-lg-3 col-sm-2 control-label\">Nazwisko</label>
                    <div class=\"col-lg-9 col-sm-9\">
                        <input type=\"text\" class=\"form-control\" id=\"lastName\" name=\"lastName\" value=\"Zaczkiewicz\" maxlength=\"160\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"street\" class=\"col-lg-3 col-sm-2 control-label col-xl-2 col-xl-offset-1\">Adres </label>
                    <div class=\"col-lg-9 col-sm-9\">
                        <input type=\"text\" class=\"form-control\" id=\"street\" name=\"street\" value=\"Ambrożów 14A\"  maxlength=\"200\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <div class=\"form-xs-group\">
                        <label for=\"postcode\" class=\"col-lg-3 col-xs-12  col-sm-2 control-label col-xl-2 col-xl-offset-1\">Kod pocztowy</label>
                        <div class=\"col-xs-4 col-xs-6 col-sm-2 col-lg-2\">
                            <input type=\"text\" class=\"form-control\" id=\"postcode\" name=\"postcode\" value=\"27-225\" maxlength=\"6\">
                        </div>
                    </div>
                    <label for=\"city\" class=\"control-label col-xs-12 col-sm-2 col-lg-2\">Miejscowość</label>
                    <div class=\"col-xs-12 col-sm-5 col-lg-5\">
                        <input type=\"text\" class=\"form-control\" id=\"city\" name=\"city\" value=\"Pawłów\" maxlength=\"60\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"phone\" class=\"col-lg-3 col-sm-2 control-label col-xl-2 col-xl-offset-1\">Telefon kontaktowy</label>
                    <div class=\"col-lg-9 col-sm-9\">
                        <input type=\"text\" class=\"form-control\" id=\"phone\" name=\"phone\" value=\"507158666\" maxlength=\"9\">
                    </div>
                </div>

        </div>";

        }




        ?>


</div>
</body>
</html>