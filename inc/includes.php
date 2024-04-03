<?php
session_start();

$headerAssetsPath = "../../public/assets/img/";
$headerHomePath = "../../public/index.php";
$headerLoginPath = "login.php";
$headerControllersPath = "";

require_once __DIR__."/../config/database.php";
require_once __DIR__."/../src/Models/helpfulFunctions.php";