<?php
$sql = "SELECT gym_location_id, zone FROM gym_locations";
$stmt = $pdo->query($sql);
$locations = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (
    isset($_POST["classname"]) && isset($_POST["location"])
    && isset($_POST["date"]) && isset($_POST["time"])
    && isset($_POST["name"]) && isset($_POST["duration"])
    && isset($_POST['description'])
) {
    $sql = "INSERT INTO classes (class_name, gym_location_id, date, time, duration, trainer_name, description) 
    VALUES (:classname, :location, :date, :time, :duration, :name, :description)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ":classname" => $_POST["classname"],
        ":location" => $_POST["location"],
        ":date" => $_POST["date"],
        ":time" => $_POST["time"],
        ":duration" => $_POST["duration"],
        ":name" => $_POST["name"],
        ":description" => $_POST["description"],
    ]);

    header("Location: ../Models/redirectClassesManager.php");
}

if (isset($_POST["delete"])) {
    $sql = 'DELETE FROM classes WHERE class_id= :zip';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([":zip" => $_POST["delete"]]);
}

$stmt = $pdo->query("SELECT class_id, gym_location_id, date, time, trainer_name FROM classes");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
