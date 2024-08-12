<?php

declare(strict_types=1);

function create_article_draft(object $pdo, string $imageUrl, string $username, string $title, string $genre, string $article) {
    $userId = get_userID($pdo, $username);

    set_article_draft($pdo, $imageUrl, $username, $title, $genre, $article, $userId);
}