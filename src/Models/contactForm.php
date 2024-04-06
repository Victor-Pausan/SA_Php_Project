<?php

$form = "contact";

if (
    isset($_POST["first-name"]) && isset($_POST["last-name"])
    && isset($_POST["email"]) && isset($_POST["subject"])
    && isset($_POST["message"])
) {
    $email = $_POST["email"];
    $message = $_POST["message"];
    $firstName = $_POST["first-name"];
    $lastName = $_POST["last-name"];
    $subject = $_POST["subject"];

    $formData = [
        "first-name"=> $firstName,
        "last-name"=> $lastName,
        "email"=> $email,
        "subject"=> $subject,
        "message"=> $message
    ];


    if (validateForm($formData, $form)) {
        $sql = "INSERT INTO questions (first_name, last_name, email, subject, message)
            VALUES (:firstName, :lastName, :email, :subject, :message)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ":firstName" => $firstName,
            ":lastName" => $lastName,
            ":email" => $email,
            ":subject" => $subject,
            ":message" => $message
        ]);
    }else{
        header("Location: ../Models/invalidContactInfo.php");
    }
}
