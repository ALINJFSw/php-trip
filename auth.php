<?php
    $email_is_valid = false;
    $password_is_valid = false;
    $email = "";
    if (isset($_POST["email"])){
        $email = $_POST["email"];
    }
    $password = "";
    if (isset($_POST["password"])){
        $password = $_POST["password"];
    }
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) $email_is_valid = true;
    

        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number = preg_match('@[0-9]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);
        if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
            $password_is_valid = false;
        }
        else {
            $password_is_valid = true;
        }
    
    echo $email_is_valid && $password_is_valid ? "true" : "false";