<?php

require_once "../../inc/includes.php";

if(checkLogin()){
    header("Location: ../../public/index.php");
} else{
    $loggedIn = "Log in";
    $loggedInLink = "login.php";
}

require_once "../Models/createAccModel.php";

require_once "../Views/createAcc.php";