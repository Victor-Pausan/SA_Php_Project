<?php
require_once "../../inc/includes.php";

if(checkLogin()){
    header("Location: ../../public/index.php");
} else{
    $loggedIn = "Log in";
    $loggedInLink = "login.php";
}

//include login model
require_once "../Models/loginModel.php";

//include login view page
require_once "../Views/loginPage.php";