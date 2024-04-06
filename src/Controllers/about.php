<?php
require_once "../../inc/includes.php";

if(checkLogin()){
    $loggedIn = "Log out";
    $loggedInLink = "../Models/logoutModel.php";
} else{
    $loggedIn = "Log in";
    $loggedInLink = "login.php";
}

//inser about page view
require_once "../Views/aboutPage.php";