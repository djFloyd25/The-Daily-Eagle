<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $imageUrl = $_POST["image"];
    $title = $_POST["title"];
    $genre = $_POST["genre"];
    $article = $_POST["article"];
    $username = $_POST["username"];

    try {
        require_once "dbh.inc.php";
        require_once "create_model.inc.php";
        require_once "create_contr.inc.php";
        require_once "../phpMailer/send-email.php";

        require_once 'config.php';

        create_article_draft($pdo, $imageUrl, $username, $title, $genre, $article);

        $recepient = "minifleeze@gmail.com";

        send_email($recepient, $username, $title);

        header("Location: ../html/create.php?draft=success");

        $pdo = null;
        $stmt = null;

        die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
}
else {
    header("Location: ../html/create.php");
    die();
}