<?php
function checkLogin()
{
    if (isset($_SESSION["user_id"]) && isset($_SESSION["email"])) {
        return true;
    }
    return false;
}

function validateForm($formData, $form) : bool
{
    $errors = [];
    // Perform validation logic here
    if (isset($formData["first-name"])) {
        if (empty($formData['first-name'])) {
            $_SESSION["first-name-error".$form] =  "First name field is required.";
            array_push($errors, "err");
        }
        else{
            unset($_SESSION["first-name-error".$form]);
        }
    }
    // Example validation: check if last name field is empty
    if (isset($formData["last-name"])) {
        if (empty($formData['last-name'])) {
            $_SESSION["last-name-error".$form] =  "Last name field is required.";
            array_push($errors, "err");
        }else{
            unset($_SESSION["last-name-error".$form]);
        }
    }

    // Example validation: check if password field is empty
    if (isset($formData["password"])) {
        if (empty($formData['password'])) {
            $_SESSION["password-error".$form] =  "Password field is required.";
            array_push($errors, "err");
        }else{
            unset($_SESSION["password-error".$form]);
        }
    }

    // Example validation: check if phone number field is empty and is a valid phone number
    if (isset($formData["phone-nr"])) {
        if (empty($formData['phone-nr'])) {
            $_SESSION["phone-nr-error".$form] =  "Phone number field is required.";
            array_push($errors, "err");
        }else{
            unset($_SESSION["password-error".$form]);
        }
    }

    // Example validation: check if full name field is empty
    if (isset($formData["full-name"])) {
        if (empty($formData['full-name'])) {
            $_SESSION["full-name-error".$form] =  "Full name field is required.";
            array_push($errors, "err");
        }else{
            unset($_SESSION["full-name-error".$form]);
        }
    }
    // Example validation: check if subject field is empty
    if (isset($formData["subject"])) {
        if (empty($formData['subject'])) {
            $_SESSION["subject-error".$form] =  "Subject field is required.";
            array_push($errors, "err");
        }else{
            unset($_SESSION["subject-error".$form]);
        }
    }

    // Example validation: check if message field is empty
    if (isset($formData["message"])) {
        if (empty($formData['message'])) {
            $_SESSION["message-error".$form] =  "Message field is required.";
            array_push($errors, "err");
        }else{
            unset($_SESSION["message-error".$form]);
        }
    }

    // Example validation: check if name field is empty

    // Example validation: check if email field is empty and is a valid email address
    if (isset($formData["email"])) {
        if (empty($formData['email'])) {
            $_SESSION["email-error".$form] =  "Email field is required.";
            array_push($errors, "err");
        } elseif (!filter_var($formData['email'], FILTER_VALIDATE_EMAIL)) {
            $_SESSION["email-error".$form] = "Invalid email address.";
            array_push($errors, "err");
        }else{
            unset($_SESSION["email-error".$form]);
        }
    }

    // Add more validation rules as needed

    // If all validations pass, return true
    if ($errors === []) {
        return true;
    }
    return false;
}
