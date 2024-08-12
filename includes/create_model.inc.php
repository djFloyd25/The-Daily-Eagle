<?php

declare(strict_types=1);

function get_userID(object $pdo, string $username) {
    $queryUserId = "SELECT id FROM users WHERE username = :username;";
    $stmtUserId = $pdo->prepare($queryUserId);

    $stmtUserId->bindParam(":username", $username);
    $stmtUserId->execute();

    $resultUserId = $stmtUserId->fetch(PDO::FETCH_ASSOC);
    return $resultUserId ? (int)$resultUserId['id'] : null;
}

function set_article_draft(object $pdo, string $imageUrl, string $username, string $title, string $genre, string $article, int $userId) {

    $query = "INSERT INTO articlesdrafts (creator, imageUrl, title, genre, article_content, users_id) VALUES 
        (:username, :imageUrl, :title, :genre, :article, :userId);";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":imageUrl", $imageUrl);
        $stmt->bindParam(":title", $title);
        $stmt->bindParam(":genre", $genre);
        $stmt->bindParam(":article", $article);
        $stmt->bindParam(":userId", $userId);

        $stmt->execute();
}