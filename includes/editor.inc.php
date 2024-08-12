<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $imageUrl = $_POST["image"];
    $title = $_POST["title"];
    $genre = $_POST["genre"];
    $article = $_POST["article"];
    $username = $_POST["username"];

    try {
        require_once "dbh.inc.php";
        require_once "editor_model.inc.php";
        require_once "editor_contr.inc.php";

        require_once 'config.php';

        create_article_final($pdo, $imageUrl, $username, $title, $genre, $article);

        header("Location: ../html/editor.php?final=success");

        $pdo = null;
        $stmt = null;

        die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
}
else {
    header("Location: ../html/editor.php");
    die();
}