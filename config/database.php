<?php

$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "rahan2003";
$dbName = "sa_php_project";

$pdo = new PDO("mysql: $serverName;port=8888; dbname=$dbName", $dbUsername, $dbPassword);