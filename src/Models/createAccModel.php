<?php
$form = "createAcc";

if (
    isset($_POST["full-name"])
    && isset($_POST["email"])
    && isset($_POST["phone-nr"])
    && isset($_POST["password"])
) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $fullName = $_POST["full-name"];
    $phoneNr = $_POST["phone-nr"];

    $formData = [
        "email"=> $email,
        "password"=> $password,
        "full-name"=> $fullName,
        "phone-nr"=> $phoneNr
    ];

    if (validateForm($formData, $form)) {
        $sql = "INSERT INTO users (email, full_name, password, phone_number)
            VALUES (:email, :fullName, :password, :phoneNr)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ":email" => $email,
            ":password" => $password,
            ":fullName" => $fullName,
            ":phoneNr" => $phoneNr
        ]);

        $_SESSION["auto_login_email"] = $_POST["email"];
        $_SESSION["auto_login_password"] = $_POST["password"];

        header("Location: ../Models/autoLogin.php");
    }
    else{
        header("Location: ../Models/invalidAccountCreate.php");
    }
}
