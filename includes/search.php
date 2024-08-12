<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $title = $_POST["articlesearch"];

    try {
        require_once "dbh.inc.php";

        $query = "SELECT * FROM articlesdrafts WHERE title = :title;";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":title", $title);

        $stmt->execute();

        $results = $stmt->fetch(PDO::FETCH_ASSOC);

        $pdo = null;
        $stmt = null;

        header("Location: ../html/editor.php");
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
}