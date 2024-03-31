<?php
//Check if user is already logged in:
//
if(isset($_SESSION["user_id"]) && isset($_SESSION["email"])){
    header("Location: home.php");
  }
  
  //Check for login errors
  //
  if(!isset($_SESSION["login_error"])){
    $_SESSION["login_error"] = "";
  }
  $loginMessage = $_SESSION["login_error"];
  
  if(isset($_POST["email"]) && isset($_POST["password"])){
      $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
      $password = $_POST["password"];
  
      $sql = "SELECT user_id, email, password FROM users WHERE email = :email";
      $stmt = $pdo->prepare($sql);
      $stmt->bindParam(":email", $email);
      $stmt->execute();
      $user= $stmt->fetch(PDO::FETCH_ASSOC);
  
      if($user && $password === $user["password"]){
        $_SESSION["user_id"] = $user["user_id"];
        $_SESSION["email"] = $user["email"];
        $_SESSION["login_error"] = '';
  
        header("Location: ../../public/index.php");
      } else{
        $_SESSION["login_error"] = "Invalid email or passwordl!";
  
        header("Location: ../Models/invalidLogin.php");
      }
  }