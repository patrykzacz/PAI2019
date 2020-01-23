<?php
if(isset($_GET['logout-submit']) && $_GET['logout-submit'] == 'logout'){
    session_start();
    session_unset();
    session_destroy();
    header("Location: ../index");
}