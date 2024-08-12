<?php

declare(strict_types=1);

function get_user(object $pdo, string $email) {
    $queryEmail = "SELECT * FROM users WHERE email = :email;";
    $stmtEmail = $pdo->prepare($queryEmail);

    $stmtEmail->bindParam(":email", $email);
    $stmtEmail->execute();

    $resultEmail = $stmtEmail->fetch(PDO::FETCH_ASSOC);
    return $resultEmail;
}