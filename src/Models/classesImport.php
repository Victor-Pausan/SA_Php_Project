<?php
$sql = "SELECT * FROM gym_locations";
$stmt = $pdo->query($sql);
$locations = $stmt->fetchAll(PDO::FETCH_ASSOC);

if(isset($_GET["location"])){
    if($_GET["location"] == 0){
        $sql = "SELECT * FROM classes";
        $stmt = $pdo->query($sql);
        $classes = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } else{
        $sql = "SELECT * FROM classes WHERE gym_location_id= :gym_location_id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(["gym_location_id" => $_GET["location"]]);
        $classes = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } 
} else{
    $sql = "SELECT * FROM classes";
    $stmt = $pdo->query($sql);
    $classes = $stmt->fetchAll(PDO::FETCH_ASSOC);
}