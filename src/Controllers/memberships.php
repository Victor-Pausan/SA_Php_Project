<?php
require_once "../../inc/includes.php";

if(checkLogin()){
    $loggedIn = "Log out";
    $loggedInLink = "../../src/Models/logoutModel.php";
} else{
    $loggedIn = "Log in";
    $loggedInLink = "../../src/Controllers/login.php";
    //header("Location: login.php");
}

//import view
require_once "../Views/membershipsDisplay.php";