<?php
//Check if user is already logged in:
//
if (isset($_SESSION["user_id"]) && isset($_SESSION["email"])) {
  header("Location: home.php");
}

$logInRedirect = "index.php";

//Check previous page
if(isset($_SERVER['HTTP_REFERER'])){
  $previousPage = $_SERVER['HTTP_REFERER'];
  if (strpos($previousPage, "classes.php") !== false) {
    $logInRedirect = "classes.php";
  }
}

//Check for login errors
//
if (!isset($_SESSION["login_error"])) {
  $_SESSION["login_error"] = "";
}
$loginMessage = $_SESSION["login_error"];

if (isset($_POST["email"]) && isset($_POST["password"])) {
  $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
  $password = $_POST["password"];

  $sql = "SELECT user_id, email, password FROM users WHERE email = :email";
  $stmt = $pdo->prepare($sql);
  $stmt->bindParam(":email", $email);
  $stmt->execute();
  $user = $stmt->fetch(PDO::FETCH_ASSOC);

  if ($user && $password === $user["password"]) {
    $_SESSION["user_id"] = $user["user_id"];
    $_SESSION["email"] = $user["email"];
    $_SESSION["login_error"] = '';

    //check if an admin logged in
    //redirect to classes manager page if so
    $sql = "SELECT email FROM users WHERE full_name = \"admin\"";
    $stmt = $pdo->query($sql);
    $admins = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($admins as $admin) {
      if (in_array($_SESSION["email"], $admin)) {
        header("Location: ../Controllers/adminClassesManager.php");
        exit();
      }
    }

    if (isset($_SESSION["login_error"])) {
      unset($_SESSION["login_error"]);
    }

    header("Location: ../../public/$logInRedirect");
  } else {
    $_SESSION["login_error"] = "Invalid email or passwordl!";

    header("Location: ../Models/invalidLogin.php");
  }
}
