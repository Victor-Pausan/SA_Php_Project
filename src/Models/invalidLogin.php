<?php
require_once "../../inc/includes.php";

if(isset($_SESSION["login_error"])){

    header("Location: ../Controllers/login.php");
}