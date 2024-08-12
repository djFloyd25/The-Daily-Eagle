<?php

declare(strict_types=1);

function get_username(object $pdo, string $username) {
    $queryUsername = "SELECT username FROM users WHERE username = :username;";
    $stmtUsername = $pdo->prepare($queryUsername);

    $stmtUsername->bindParam(":username", $username);
    $stmtUsername->execute();

    $resultUsername = $stmtUsername->fetch(PDO::FETCH_ASSOC);
    return $resultUsername;
}

function get_email(object $pdo, string $email) {
    $queryEmail = "SELECT username FROM users WHERE email = :email;";
    $stmtEmail = $pdo->prepare($queryEmail);

    $stmtEmail->bindParam(":email", $email);
    $stmtEmail->execute();

    $resultEmail = $stmtEmail->fetch(PDO::FETCH_ASSOC);
    return $resultEmail;
}

function set_user(object $pdo, string $pwd, string $username, string $email) {
    $query = "INSERT INTO users (username, pwd, email) VALUES 
        (:username, :pwd, :email);";

        $stmt = $pdo->prepare($query);

        $options = [
            'cost' => 12
        ];
        
        $hashedPwd = password_hash($pwd, PASSWORD_BCRYPT, $options);

        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":pwd", $hashedPwd);
        $stmt->bindParam(":email", $email);

        $stmt->execute();
}