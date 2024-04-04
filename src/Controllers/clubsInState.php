<?php
require_once "../../inc/includes.php";

if(checkLogin()){
    $loggedIn = "Log out";
    $loggedInLink = "../Models/logoutModel.php";
} else{
    $loggedIn = "Log in";
    $loggedInLink = "login.php";
}

//import model
require_once "../Models/clubsImportForState.php";

//import view
require_once "../Views/clubsForState.php";