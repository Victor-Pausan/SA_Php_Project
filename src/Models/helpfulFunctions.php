<?php
function checkLogin() { 
    if(isset($_SESSION["user_id"]) && isset($_SESSION["email"])){
        return true;
    }
    return false;
}