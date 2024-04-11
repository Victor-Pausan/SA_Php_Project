<?php

$sql = "SELECT * FROM states";
$stmt = $pdo->query($sql);
$states = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (isset($_GET["subscription_id"])) {
}

if (isset($_GET["state"])) {
    if (isset($_GET["subscription_id"])) {
        header("Location: clubsInState.php?state=" . $_GET["state"] . "&subscription_id=" . $_GET["subscription_id"]);
    } else {
        header("Location: clubsInState.php?state=" . $_GET["state"]);
    }
}
