<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["firstname"];
    $pwd = $_POST["password"];
    $email = $_POST["email"];

    try {
        require_once "dbh.inc.php";
        require_once "signup_model.inc.php";
        require_once "signup_contr.inc.php";

        // ERROR HANDLERS
        $errors = [];

        if (is_email_invalid($email)) {
            $errors["inavlid_email"] = "Invalid email used!";
        }
        if (is_username_taken($pdo, $username)) {
            $errors["username_taken"] = "Username already taken!";
        }
        if  (is_email_registered($pdo, $email)) {
            $errors["email_used"] = "Email already registered!";
        }

        require_once 'config.php';

        if ($errors) {
            $_SESSION["errors_signup"] = $errors;
            header("Location: ../html/signup.php");
            die();
        }

        create_user($pdo, $pwd, $username, $email);

        header("Location: ../html/login.php?signup=success");

        $pdo = null;
        $stmt = null;

        die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
}
else {
    header("Location: ../html/signup.php");
    die();
}