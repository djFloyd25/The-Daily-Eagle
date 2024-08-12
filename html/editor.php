<?php
    session_start();
    require_once "../includes/dbh.inc.php";
    require_once "../includes/login_view.inc.php";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $title = $_POST["articlesearch"];
    
        try {
    
            $query = "SELECT * FROM articlesdrafts WHERE title = :title;";
    
            $stmt = $pdo->prepare($query);
    
            $stmt->bindParam(":title", $title);
    
            $stmt->execute();
    
            $results = $stmt->fetch(PDO::FETCH_ASSOC);
    
            $pdo = null;
            $stmt = null;

        } catch (PDOException $e) {
            die("Query failed: " . $e->getMessage());
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/create.css">
</head>
<body>
    <header id="cs-header">
        <div class="cs-top-bar">
            <div class="cs-top-logo"><img class="cs-top-picture" src="../Images/Screenshot_2024-07-17_191244-removebg-preview.png" alt=""></div>
            <div class="cs-page-name">Editor Account</div>
            <div class="cs-top-profile">
                <li class="cs-li cs-dropdown" tabindex="0">
                    <span class="cs-li-link">
                        <img id="dropdown" class="cs-top-profile-picture" src="https://lh3.googleusercontent.com/ogw/AF2bZygQBlEqbRZbmbhXiIwtFdb3V0sbDxsHmOdarhW5gqtzQYKe=s32-c-mo" alt="dropdown icon" width="15" height="15" decoding="async" aria-hidden="true">
                    </span>
                    <ul class="cs-drop-ul">
                        <li class="cs-drop-li">
                            <a href="" class="cs-li-link cs-drop-link">Profile</a>
                        </li>
                        <li class="cs-drop-li">
                            <a href="homepage.php" class="cs-li-link cs-drop-link">Sign Out</a>
                        </li>
                    </ul>
                </li>
                <h1 class="cs-profile-name" id="username"><?php output_username(); ?></h1>
            </div>
        </div>
    </header>

    <form class="cs-search-form" action="editor.php" method="post">
        <label for="search">Search for article:</label>
        <input id="search" type="text" name="articlesearch" placeholder="Search...">
        <button>Search</button>

    </form>

    <main id="cs-main">
        <div class="cs-col">
            <div class="cs-row-1">
                <?php
                    if (empty($results)) {
                        echo '<div class="cs-image-url">';
                        echo '<h2>Image</h2>';
                        echo '<img id="article-image" src="" alt="">'; 
                        echo '<textarea name="image" id="article-url" placeholder="Image URL"></textarea>';
                    }
                    else {
                        echo '<div class="cs-image-url">';
                        echo '<h2>Image</h2>';
                        echo '<img id="article-image" src="' . $results["imageUrl"] . '" alt="">';
                        echo '<textarea name="image" id="article-url" placeholder="Image URL">' . $results["imageUrl"] .'</textarea>';
                    }
                ?>
                <?php
                    if (empty($results)) {
                        echo '<div class="cs-title">';
                        echo '<h2>Title</h2>';
                        echo '<textarea name="title" id="title" placeholder="Title"></textarea>';
                        echo '</div>';
                    }
                    else {
                        echo '<div class="cs-title">';
                        echo '<h2>Title</h2>';
                        echo '<textarea name="title" id="title" placeholder="Title">' . $results["title"] . '</textarea>';
                        echo '</div>';
                    }
                ?>
                <?php 
                    if (empty($results)) {
                        echo '<div class="cs-genre">';
                        echo '<h2>Genre</h2>';
                        echo '<textarea name="genre" id="genre" placeholder="Genre"></textarea>';
                        echo '</div>';
                    }
                    else {
                        echo '<div class="cs-genre">';
                        echo '<h2>Genre</h2>';
                        echo '<textarea name="genre" id="genre" placeholder="Genre">' . $results["genre"] . '</textarea>';
                        echo '</div>';
                    }
                ?>
            </div>
            <div class="cs-row-2">
                <?php 
                    if (empty($results)) {
                        echo '<div class="cs-author">';
                        echo '<h2>Author</h2>';
                        echo '<textarea name="author" id="author" placeholder="Author"></textarea>';
                        echo '</div>';
                    }
                    else {
                        echo '<div class="cs-author">';
                        echo '<h2>Author</h2>';
                        echo '<textarea name="author" id="author" placeholder="Author">' . $results["creator"] . '</textarea>';
                        echo '</div>';
                    }
                ?>
            </div>
            <div class="cs-row-2">
                <?php
                    if (empty($results)) {
                        echo '<div class="cs-article">';
                        echo '<h2>Article</h2>';
                        echo '<textarea name="article-content" id="article-content" placeholder="Article Content" rows="10" cols="100"></textarea>';
                        echo '</div>';
                    }
                    else {
                        echo '<div class="cs-article">';
                        echo '<h2>Article</h2>';
                        echo '<textarea name="article-content" id="article-content" placeholder="Article Content" rows="10" cols="100">' . $results["article_content"] . '</textarea>';
                        echo '</div>';
                    }
                ?>
            </div>
            <div class="cs-row-3-editor">
                <div class="cs-submit">
                    <button id="submit">Submit</button>
                </div>
            </div>      
        </div>
    </main>

    <form id="hiddenForm" action="../includes/editor.inc.php" method="post" style="display:none;">
        <input type="hidden" name="image" id="hiddenImage">
        <input type="hidden" name="title" id="hiddenTitle">
        <input type="hidden" name="genre" id="hiddenGenre">
        <input type="hidden" name="article" id="hiddenArticle">
        <input type="hidden" name="username" id="hiddenUsername">
    </form>

    <script src="../javascript/editor.js" defer></script>
</body>
</html>