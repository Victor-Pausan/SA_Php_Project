<?php
require_once "../inc/includes.php";

$headerAssetsPath = "assets/img/";
$headerHomePath = "index.php";
$headerLoginPath = "../src/Controllers/login.php";

if(checkLogin()){
    $loggedIn = "Log out";
    $loggedInLink = "../src/Models/logoutModel.php";
} else{
    $loggedIn = "Log in";
    $loggedInLink = "../src/Controllers/login.php";
}

//include home page view
require_once "../src/Views/home.php";