<?php
    session_start();
    require_once "../includes/login_view.inc.php";
    require_once "../includes/create_view.inc.php";
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
            <div class="cs-page-name">Reporter Account</div>
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
                            <form action="../includes/logout.inc.php" method="post">
                                <button class="cs-li-link cs-drop-link">Sign Out</button>
                            </form>
                        </li>
                    </ul>
                </li>
                <h1 class="cs-profile-name" id="username"><?php output_username(); ?></h1>
            </div>
        </div>
    </header>
    <main id="cs-main">
        <div class="cs-col">
            <div class="cs-row-1">
                <div class="cs-image-url">
                    <h2>Image</h2>
                    <input a id="url" type="text" placeholder="Image URL"> 
                </div>
                <div class="cs-title">
                    <h2>Title</h2>
                    <input id="title" type="text" placeholder="Title">
                </div>
                <div class="cs-genre">
                    <h2>Genre</h2>
                    <input type="radio" name="genre" value="News">News<br>
                    <input type="radio" name="genre" value="Sports">Sports<br>
                    <input type="radio" name="genre" value="Special">Special<br>
                    <input type="radio" name="genre" value="Opinion">Opinion<br>
                    <input type="radio" name="genre" value="Culture">Culture
                </div>
            </div>
            <div class="cs-row-2">
                <div class="cs-article">
                    <h2>Article</h2>
                    <textarea id="article-content" placeholder="Article Content" rows="10" cols="100"></textarea>
                </div>
            </div>
            <div class="cs-create">
            <div class="cs-row-3">
                <div class="cs-submit">
                    <button id="submit">Submit</button>
                </div>
            </div>  
            </div>   
        </div>
    </main>
    <form id="hiddenForm" action="../includes/create.inc.php" method="post" style="display:none;">
        <input type="hidden" name="image" id="hiddenImage">
        <input type="hidden" name="title" id="hiddenTitle">
        <input type="hidden" name="genre" id="hiddenGenre">
        <input type="hidden" name="article" id="hiddenArticle">
        <input type="hidden" name="username" id="hiddenUsername">
    </form>

    <script src="../javascript/create.js" defer>
        <?php
        if (isset($_SESSION["user_id"])) {
            $username = $_SESSION["user_username"];
            echo "const username = '" . htmlspecialchars($username, ENT_QUOTES, 'UTF-8') . "';";
        } else {
            echo "const username = 'Guest';";
        }
        ?>
    </script>
</body>
</html>