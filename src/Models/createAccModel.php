<?php
if(
    isset($_POST["fullname"]) 
    && isset($_POST["email"]) 
    && isset($_POST["phonenr"]) 
    && isset($_POST["password"])
){
    $sql = "INSERT INTO users (email, full_name, password, phone_number)
            VALUES (:email, :fullname, :password, :phonenr)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ":email"=> $_POST["email"],
        ":password"=> $_POST["password"],
        ":fullname"=> $_POST["fullname"],
        ":phonenr"=> $_POST["phonenr"]
    ]);

    $_SESSION["auto_login_email"] = $_POST["email"];
    $_SESSION["auto_login_password"] = $_POST["password"];

    header("Location: ../Models/autoLogin.php");
}