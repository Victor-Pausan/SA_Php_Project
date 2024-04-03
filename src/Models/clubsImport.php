<?php

$sql = "SELECT * FROM states";
$stmt = $pdo->query($sql);
$states = $stmt->fetchAll(PDO::FETCH_ASSOC);