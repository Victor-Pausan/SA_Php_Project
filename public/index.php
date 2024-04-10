<?php
require_once "../inc/includes.php";

$headerAssetsPath = "assets/img/";
$headerHomePath = "index.php";
$headerLoginPath = "../src/Controllers/login.php";
$headerControllersPath = "../src/Controllers/";

if(checkLogin()){
    $loggedIn = "Log out";
    $loggedInLink = "../src/Models/logoutModel.php";
    $getStarted = "../src/Controllers/classes.php";
} else{
    $loggedIn = "Log in";
    $loggedInLink = "../src/Controllers/login.php";
    $getStarted = "../src/Controllers/createAccount.php";
}

//include home page view
require_once "../src/Views/home.php";