<?php
require_once "../../inc/includes.php";

if(checkLogin()){
    $loggedIn = "Log out";
    $loggedInLink = "../src/Models/logoutModel.php";
} else{
    $loggedIn = "Log in";
    $loggedInLink = "../src/Controllers/login.php";
}

//import classes model
require_once "../Models/classesImport.php";

//import classes view
require_once "../Views/classesDisplay.php";