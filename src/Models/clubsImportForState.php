<?php

if(isset($_GET["state"])){
    $id = $_GET["state"];
}

//locations query
$sql = "SELECT * FROM gym_locations WHERE state_id= :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam("id", $id);
$stmt->execute();
$locations = $stmt->fetchAll(PDO::FETCH_ASSOC);

//adjust location address for google maps link
function adjustAddress($address){
    trim($address," ");
    $address = str_replace(" ","+", $address);
    $address = str_replace(",","%2C", $address);
    return $address;
}

//states query
$sql = "SELECT * FROM states WHERE state_id= :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam("id", $id);
$stmt->execute();
$state = $stmt->fetch(PDO::FETCH_ASSOC);