<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $pwd = $_POST["password"];
    $email = $_POST["email"];

    try {
        require_once "dbh.inc.php";
        require_once "login_model.inc.php";
        require_once "login_contr.inc.php";

        // ERROR HANDLERS
        $errors = [];

        $result = get_user($pdo, $email);

        // Debug: Print fetched user result
        echo '<script>sessionStorage.setItem("loginResult", ' . json_encode($result) . ');</script>';

        if (is_email_wrong($result)) {
            $errors["inavlid_email"] = "There is no acconut with this email.";
        }
        if (!is_email_wrong($result) && is_password_wrong($pwd, $result["pwd"])) {
            $errors["wrong_passwprd"] = "Incorrect login info!";
        }

        require_once 'config.php';

        if ($errors) {
            $_SESSION["errors_login"] = $errors;
            header("Location: ../html/login.php");
            die();
        }

        $newSessionId = session_create_id();
        $sessionId = $newSessionId . "_" . $result["id"];
        session_id($sessionId);

        $_SESSION["user_id"] = $result["id"];
        $_SESSION["user_username"] = htmlspecialchars($result["username"]);

        $_SESSION['last_regeneration'] = time();

        echo "Session ID: " . session_id();
        echo "User ID: " . $_SESSION["user_id"];
        echo "Username: " . $_SESSION["user_username"];

        $_SESSION['user_role'] = $result['role'];

        if ($_SESSION['user_role'] === 'reporter') {
            header("Location: ../html/create.php?login=success");
        }
        else if ($_SESSION['user_role'] === 'editor') {
            header("Location: ../html/editor.php?login=success");
        }

        $pdo = null;
        $stmt = null;

        die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
}
else {
    header("Location: ../html/login.php");
    die();
}