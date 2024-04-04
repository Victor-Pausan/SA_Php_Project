<?php

$sql = "SELECT * FROM states";
$stmt = $pdo->query($sql);
$states = $stmt->fetchAll(PDO::FETCH_ASSOC);

if(isset($_GET["state"])){
    header ("Location: clubsInState.php?state=". $_GET["state"]);
}