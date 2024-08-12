<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $image = $_POST["image"];
        $title = $_POST["title"];
        $genre = $_POST["genre"];
        $articlecontent = $_POST["article-content"];
    
        try {
            require_once "dbh.inc.php";
    
            $query = "INSERT INTO users (username, pwd, email) VALUES 
            (:username, :pwd, :email);";
    
            $stmt = $pdo->prepare($query);
    
            $stmt->bindParam(":username", $username);
            $stmt->bindParam(":pwd", $pwd);
            $stmt->bindParam(":email", $email);
    
            $stmt->execute();
    
            $pdo = null;
            $stmt = null;
    
            header("Location: ../html/create.html");
    
            die();
        } catch (PDOException $e) {
            die("Query failed: " . $e->getMessage());
        }
    }
    else {
        header("Location: ../html/signup.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>The Daily Eagle</title>
        <link rel="stylesheet" href="../styles/global.css">
        <link rel="stylesheet" href="../styles/header.css">
        <link rel="stylesheet" href="../styles/blog.css">
        <link rel="stylesheet" href="../styles/footer.css">
    </head>
    <body>
        <header id="cs-navigation">
            <div class="cs-top-bar">
                <div class="cs-top-container">
                    <a href="homepage.php"><img class="cs-top-logo" src="../Images/Screenshot_2024-07-17_191244-removebg-preview.png" alt=""></a>
                    <div class="cs-top-social">
                        <a href="https://www.facebook.com/SCGSSM" class="cs-social-link">
                            <img class="cs-social-icon" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/Icons/face-grey.svg" alt="logo" width="12" height="12" aria-hidden="true" decoding="async">
                        </a>
                        <a href="https://x.com/sc_gssm" class="cs-social-link">
                            <img class="cs-social-icon" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/Icons/twit-grey.svg" alt="logo" width="12" height="12" aria-hidden="true" decoding="async">
                        </a>
                        <a href="https://www.instagram.com/scgssm/" class="cs-social-link">
                            <img class="cs-social-icon" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/Icons/insta-grey.svg" alt="logo" width="12" height="12" aria-hidden="true" decoding="async">
                        </a>
                    </div>
                </div>
            </div>
            <div class="cs-container">
                <!--Mobile Nav Toggle-->
                <button class="cs-toggle" aria-label="mobile menu toggle">
                    <div class="cs-box" aria-hidden="true">
                        <span class="cs-line cs-line1" aria-hidden="true"></span>
                        <span class="cs-line cs-line2" aria-hidden="true"></span>
                        <span class="cs-line cs-line3" aria-hidden="true"></span>
                    </div>
                </button>
                <!--Navigation List-->
                <nav class="cs-nav" role="navigation">
                    <!--Mobile Nav Toggle-->
                    <!-- We need a wrapper div so we can set a fixed height on the cs-ul in case the nav list gets too long from too many dropdowns being opened and needs to have an overflow scroll. This wrapper acts as the background so it can go the full height of the screen and not cut off any overflowing nav items while the cs-ul stops short of the bottom of the screen, which keeps all nav items in view no matter how mnay there are-->
                    <div id="navigation" class="cs-ul-wrapper">
                        <ul id="cs-expanded" class="cs-ul" aria-expanded="false">
                            <li class="cs-li">
                                <a href="news.php" class="cs-li-link">
                                    News
                                </a>
                            </li>
                            <li class="cs-li">
                                <a href="" class="cs-li-link">
                                    Sports
                                </a>
                            </li>
                            <!--Copy and paste this cs-dropdown list item and replace any .cs-li with this cs-dropdown group to make a new dropdown and it will work-->
                            <li class="cs-li cs-dropdown" tabindex="0">
                                <span class="cs-li-link">
                                    Specials
                                    <img class="cs-drop-icon" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/Icons/chev-down.svg" alt="dropdown icon" width="15" height="15" decoding="async" aria-hidden="true">
                                </span>
                                <ul class="cs-drop-ul">
                                    <li class="cs-drop-li">
                                        <a href="" class="cs-li-link cs-drop-link">Housing</a>
                                    </li>
                                    <li class="cs-drop-li">
                                        <a href="" class="cs-li-link cs-drop-link">Food Banks</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="cs-li">
                                <a href="" class="cs-li-link">
                                    Opinion
                                </a>
                            </li>
                            <li class="cs-li">
                                <a href="" class="cs-li-link">
                                    Culture
                                </a>
                            </li>
                        </ul> 
                    </div>
                </nav>
                <!--Dark Mode toggle, uncomment button code if you want to enable a dark mode toggle-->
                <!-- <button id="dark-mode-toggle" aria-label="dark mode toggle">
                    <svg class="cs-moon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480 480" style="enable-background:new 0 0 480 480" xml:space="preserve"><path d="M459.782 347.328c-4.288-5.28-11.488-7.232-17.824-4.96-17.76 6.368-37.024 9.632-57.312 9.632-97.056 0-176-78.976-176-176 0-58.4 28.832-112.768 77.12-145.472 5.472-3.712 8.096-10.4 6.624-16.832S285.638 2.4 279.078 1.44C271.59.352 264.134 0 256.646 0c-132.352 0-240 107.648-240 240s107.648 240 240 240c84 0 160.416-42.688 204.352-114.176 3.552-5.792 3.04-13.184-1.216-18.496z"/></svg>
                    <img class="cs-sun" aria-hidden="true" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Icons%2Fsun.svg" decoding="async" alt="moon" width="15" height="15">
                </button> -->
            </div>
        </header>

        

        <!-- ============================================ -->
<!--                    Blog                      -->
<!-- ============================================ -->
            

        <header id="cs-content">
            <div class="cs-middle-section">
                <div class="cs-middle-image">
                    <a class="cs-image-holder" href="https://www.scgssm.org/">
                        <img class="cs-middle-photo" src="https://www.scgssm.org/sites/default/files/Images/Front%204.jpg" alt="">
                    </a>
                </div>
            </div>
            <div class="cs-containter">
                <div class="cs-row">
                    <div class="cs-col">
                        <div class="cs-intro">
                            <div class="cs-trending-left">
                                <article class="cs-school">
                                    <div class="cs-school-row">
                                        <div class="cs-writer-info">
                                            <div>
                                            <a class="cs-middle-photo" href=""><img class="cs-middle-photo" src="../Images/gssm_website.png" alt=""></a>
                                            </div>
                                            <div>
                                                <div>
                                                    <a href="">This is the title of the persons article</a>
                                                </div>
                                                <div>
                                                <span class="cs-article-author">
                                                    By <a class="cs-link-author" href="https://www.dailygamecock.com/staff/tyler-sprague">Tyler Sprague</a> |                         
                                                    <span class="cs-school-time">10:33pm
                                                    </span>
                                                </span>
                                                </div>
                                                <div>
                                                    <p>This is a description of the persons article. I dont exactly know how we will do this part yet. RAWR.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="cs-trending-right">
                                <h2 class="cs-header-2">Trending Now</h2>
                                <div class="cs-trending-article">
                                    <article>
                                        <h3 class="cs-article-text">
                                            <a class="cs-link-text" href="https://www.dailygamecock.com/article/2024/07/changing-seasons-businesses-share-their-experiences-of-columbias-college-town-cycle-of-patronage-news-sprague">Changing seasons: Businesses share their experiences of Columbia’s college-town cycle of patronage</a>
                                        </h3>
                                        <span class="cs-article-author">
                                            By <a class="cs-link-author" href="https://www.dailygamecock.com/staff/tyler-sprague">Tyler Sprague</a> |                         
                                            <span class="cs-school-time">10:33pm
                                            </span>
                                        </span>
                                    </article>
                                </div>
                                <hr>
                                <div class="cs-trending-article">
                                    <article>
                                        <h3 class="cs-article-text">
                                            <a class="cs-link-text" href="https://www.dailygamecock.com/article/2024/07/changing-seasons-businesses-share-their-experiences-of-columbias-college-town-cycle-of-patronage-news-sprague">Changing seasons: Businesses share their experiences of Columbia’s college-town cycle of patronage</a>
                                        </h3>
                                        <span class="cs-article-author">
                                            By <a class="cs-link-author" href="https://www.dailygamecock.com/staff/tyler-sprague">Tyler Sprague</a> |                         
                                            <span class="cs-school-time">10:33pm
                                            </span>
                                        </span>
                                    </article>
                                </div>
                                <hr>
                                <div class="cs-trending-article">
                                    <article>
                                        <h3 class="cs-article-text">
                                            <a class="cs-link-text" href="https://www.dailygamecock.com/article/2024/07/changing-seasons-businesses-share-their-experiences-of-columbias-college-town-cycle-of-patronage-news-sprague">Changing seasons: Businesses share their experiences of Columbia’s college-town cycle of patronage</a>
                                        </h3>
                                        <span class="cs-article-author">
                                            By <a class="cs-link-author" href="https://www.dailygamecock.com/staff/tyler-sprague">Tyler Sprague</a> |                         
                                            <span class="cs-school-time">10:33pm
                                            </span>
                                        </span>
                                    </article>
                                </div>
                                <hr>
                                <div class="cs-trending-article">
                                    <article>
                                        <h3 class="cs-article-text">
                                            <a class="cs-link-text" href="https://www.dailygamecock.com/article/2024/07/changing-seasons-businesses-share-their-experiences-of-columbias-college-town-cycle-of-patronage-news-sprague">Changing seasons: Businesses share their experiences of Columbia’s college-town cycle of patronage</a>
                                        </h3>
                                        <span class="cs-article-author">
                                            By <a class="cs-link-author" href="https://www.dailygamecock.com/staff/tyler-sprague">Tyler Sprague</a> |                         
                                            <span class="cs-school-time">10:33pm
                                            </span>
                                        </span>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <hr class="cs-custom-hr">
                    <div class="cs-final-section">
                        <div class="cs-final-column-1">
                            <h2>Most Recent</h2>
                            <div class="cs-final-row-1">
                                <div class="cs-final-row-1-column">
                                    <article class="cs-article-total">
                                        <div class="cs-article-row">
                                            <div class="cs-article-image-holder">
                                                <div class="cs-article-image">
                                                    <a class="cs-article-image-profile" href="https://open.spotify.com/"><img class="cs-3-articles-image" src="data:image/jpeg;base64,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" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="cs-article-info">
                                                <span class="cs-final-row-2-info"><span class="cs-final-row-2-link"><a class="cs-info" href="https://www.dailygamecock.com/section/arts-culture">ARTS &amp; CULTURE</a></span></span>
                                                <h2 class="cs-article-title">Remixing mediums: Revyved Records transforms vinyls, aims to support USC community</h2>
                                                <span class="cs-article-author">
                                                    By <a class="cs-link-author" href="https://www.dailygamecock.com/staff/tyler-sprague">Tyler Sprague</a> |                         
                                                    <span class="cs-school-time">10:33pm
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="cs-final-row-1-column">
                                    <article class="cs-article-total">
                                        <div class="cs-article-row">
                                            <div class="cs-article-image-holder">
                                                <div class="cs-article-image">
                                                    <a class="cs-article-image-profile" href="https://open.spotify.com/"><img class="cs-3-articles-image" src="https://i.scdn.co/image/ab6761610000e5eb9ad50e478a469448c6f369df" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="cs-article-info">
                                                <span class="cs-final-row-2-info"><span class="cs-final-row-2-link"><a class="cs-info" href="https://www.dailygamecock.com/section/arts-culture">ARTS &amp; CULTURE</a></span></span>
                                                <h2 class="cs-article-title">Remixing mediums: Revyved Records transforms vinyls, aims to support USC community</h2>
                                                <span class="cs-article-author">
                                                    By <a class="cs-link-author" href="https://www.dailygamecock.com/staff/tyler-sprague">Tyler Sprague</a> |                         
                                                    <span class="cs-school-time">10:33pm
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="cs-final-row-2">
                                <span class="cs-final-row-2-info"><span class="cs-final-row-2-link"><a class="cs-info" href="https://www.dailygamecock.com/section/arts-culture">ARTS &amp; CULTURE</a></span></span>
                                <h1 class="cs-final-row-2-header"><a class="cs-text" href="">How the recent events of your mom has shaped the world</a></h1>
                                <span class="cs-article-author">
                                    By <a class="cs-link-author" href="https://www.dailygamecock.com/staff/tyler-sprague">Tyler Sprague</a> |                         
                                    <span class="cs-school-time">10:33pm
                                    </span>
                                    <p>THe blahla alfh alfhaf alfh alfhla flahf alhf lahf</p>
                                </span>
                            </div>
                            <div class="cs-final-row-3">
                                <div class="cs-final-row-1-column">
                                    <article class="cs-article-total">
                                        <div class="cs-article-row">
                                            <div class="cs-article-image-holder">
                                                <div class="cs-article-image">
                                                    <a class="cs-article-image-profile" href="https://open.spotify.com/"><img class="cs-3-articles-image" src="data:image/jpeg;base64,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" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="cs-article-info">
                                                <span class="cs-final-row-2-info"><span class="cs-final-row-2-link"><a class="cs-info" href="https://www.dailygamecock.com/section/arts-culture">ARTS &amp; CULTURE</a></span></span>
                                                <h2 class="cs-article-title">Remixing mediums: Revyved Records transforms vinyls, aims to support USC community</h2>
                                                <span class="cs-article-author">
                                                    By <a class="cs-link-author" href="https://www.dailygamecock.com/staff/tyler-sprague">Tyler Sprague</a> |                         
                                                    <span class="cs-school-time">10:33pm
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="cs-final-row-1-column">
                                    <article class="cs-article-total">
                                        <div class="cs-article-row">
                                            <div class="cs-article-image-holder">
                                                <div class="cs-article-image">
                                                    <a class="cs-article-image-profile" href="https://open.spotify.com/"><img class="cs-3-articles-image" src="data:image/jpeg;base64,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" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="cs-article-info">
                                                <span class="cs-final-row-2-info"><span class="cs-final-row-2-link"><a class="cs-info" href="https://www.dailygamecock.com/section/arts-culture">ARTS &amp; CULTURE</a></span></span>
                                                <h2 class="cs-article-title">Remixing mediums: Revyved Records transforms vinyls, aims to support USC community</h2>
                                                <span class="cs-article-author">
                                                    By <a class="cs-link-author" href="https://www.dailygamecock.com/staff/tyler-sprague">Tyler Sprague</a> |                         
                                                    <span class="cs-school-time">10:33pm
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="cs-final-column-2">
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- ============================================ -->
<!--                  Footer                      -->
<!-- ============================================ -->

<footer id="footer-1390">
    <div class="cs-container">
        <div class="cs-top">
            <a aria-label="go back to home" class="cs-logo" href="">
                <img class="cs-logo-img" loading="lazy" decoding="async" src="https://www.scgssm.org/sites/default/files/PDFs/Downloadable%20JPEGs%20and%20PNGs/gssm-primary-logo-full-color-rgb-2160px%4072ppi.png" alt="logo" width="209" height="40">
            </a>
            <ul class="cs-ul">
                <li class="cs-li">
                    <a href="" class="cs-link">News</a>
                </li>
                <li class="cs-li">
                    <a href="" class="cs-link">Sports</a>
                </li>
                <li class="cs-li">
                    <a href="" class="cs-link">Specials</a>
                </li>
                <li class="cs-li">
                    <a href="" class="cs-link">Opinion</a>
                </li>
                <li class="cs-li">
                    <a href="" class="cs-link">Culture</a>
                </li>
                <li class="cs-li">
                    <a href="signup.php" class="cs-link">Create</a>
                </li>
            </ul>
        </div>
        <div class="cs-bottom">
            <!--Social-->
            <ul class="cs-social">
                <li class="cs-social-li">
                    <a href="https://www.facebook.com/SCGSSM" class="cs-social-link" aria-label="facebook" target="_blank" rel="noopener">
                        <img class="cs-social-icon cs-default" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Icons/facebook-ba.svg" alt="icon" loading="lazy" decoding="async" width="12" height="12" aria-hidden="true">
                    </a>
                </li>
                <li class="cs-social-li">
                    <a href="https://x.com/sc_gssm" class="cs-social-link" aria-label="twitter" target="_blank" rel="noopener">
                        <img class="cs-social-icon cs-default" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Icons/twitter-ba.svg" alt="icon" loading="lazy" decoding="async" width="12" height="12" aria-hidden="true">
                    </a>
                </li>
                <li class="cs-social-li">
                    <a href="https://www.instagram.com/scgssm/" class="cs-social-link" aria-label="instagram" target="_blank" rel="noopener">
                        <img class="cs-social-icon cs-default" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Icons/instagram-ba.svg" alt="icon" loading="lazy" decoding="async" width="12" height="12" aria-hidden="true">
                    </a>
                </li>
                <li class="cs-social-li">
                    <a href="https://www.youtube.com/@scgssm1988" class="cs-social-link" aria-label="youtube" target="_blank" rel="noopener">
                        <img class="cs-social-icon cs-default" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Icons/youtube-ba.svg" alt="icon" loading="lazy" decoding="async" width="12" height="12" aria-hidden="true">
                    </a>
                </li>
            </ul>
            <span class="cs-copyright">
                © Copyright 2024 - <a href="" class="cs-copyright-link">The Daily Eagle</a>
            </span>
            <div class="cs-flex">
                <a href="" class="cs-copyright-link">Policies</a>
                <span class="cs-separater">|</span>
                <a href="" class="cs-copyright-link">Contact Us</a>
            </div>
        </div>
    </div>
</footer>


        <script src="../javascript/header.js" defer></script>
        <script src="../javascript/article.js" defer></script>
    </body>
</html>