<?php
require_once "../../inc/includes.php";

$sql = "SELECT email FROM users WHERE full_name = \"admin\"";
$stmt = $pdo->query($sql);
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

if(checkLogin()){
    foreach($rows as $row){
        if(in_array($_SESSION["email"], $row)){
            $loggedIn = "Log out";
            $loggedInLink = "../Models/logoutModel.php";
            break;
        } else{
            header("Location: ../../public/index.php");
        }
    }
} else{
    header("Location: ../../public/index.php");
}

require_once "../Models/classesManager.php";

require_once "../Views/classesManager.php";