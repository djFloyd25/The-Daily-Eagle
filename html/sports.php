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
                                <a href="sports.php" class="cs-li-link">
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
                                        <a href="specials.php" class="cs-li-link cs-drop-link">Housing</a>
                                    </li>
                                    <li class="cs-drop-li">
                                        <a href="specials.php" class="cs-li-link cs-drop-link">Food Banks</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="cs-li">
                                <a href="opinion.php" class="cs-li-link">
                                    Opinion
                                </a>
                            </li>
                            <li class="cs-li">
                                <a href="culture.php" class="cs-li-link">
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
            <div class="cs-container">
                <div class="cs-row">
                    <div class="cs-col">
                        <h1>Sports</h1>
                        <div class="cs-intro">
                            <div class="cs-trending-left">
                                <article class="cs-school">
                                    <div class="cs-school-row">
                                        <div class="cs-school-image">
                                            <div>
                                                <a href="https://www.dailygamecock.com/article/2024/07/changing-seasons-businesses-share-their-experiences-of-columbias-college-town-cycle-of-patronage-news-sprague"><img src="https://snworksceo.imgix.net/tdg/a770240e-2a2c-49b5-b7ce-3ea90582fe19.sized-1000x1000.png?w=1500&amp;ar=16%3A9&amp;fit=crop&amp;crop=faces&amp;facepad=3&amp;auto=format" class="cs-article-image-main" alt="" /></a>
                                            </div>        
                                        </div>
                                        <div class="cs-school-text">
                                            <h1 class="cs-school-headline">
                                                <a class="cs-link-text" href="https://www.dailygamecock.com/article/2024/07/changing-seasons-businesses-share-their-experiences-of-columbias-college-town-cycle-of-patronage-news-sprague">Changing seasons: Businesses share their experiences of Columbia’s college-town cycle of patronage</a>
                                            </h1>
                                            <span class="cs-school-info">
                                                By <a class="cs-link-author" href="https://www.dailygamecock.com/staff/tyler-sprague">Tyler Sprague</a> |                         
                                                <span class="cs-school-time">10:33pm
                                                </span>
                                            </span>
                                            <p class="cs-school-summary">
                                            Businesses contributing to Columbia's nightlife said they see a dip in patronage with a mass exodus of students from the city in the summer. Owners and managers of these businesses shared how their establishments prepare for the city's seasonal changes.
                                            </p>
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
                    <div id="3-articles" class="cs-3-articles">
                        <div class="cs-article">
                            <article class="cs-article-total">
                                <div class="cs-article-row">
                                    <div class="cs-article-image-holder">
                                        <div class="cs-article-image">
                                            <a class="cs-article-image-profile" href="https://open.spotify.com/"><img class="cs-3-articles-image" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMSEhUSEhMVFhUWFRYVFxcVFRUVFRcWFRUXFhUVFRUYHSggGBolHRUVITEhJSkrLi4uFx8zODMsNygtLisBCgoKDg0OGxAQGisdHR0tLS0tLS0tLSstLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0rLS0rLS0tLS0tLf/AABEIAJ8BPgMBIgACEQEDEQH/xAAbAAACAwEBAQAAAAAAAAAAAAAFBgMEBwIAAf/EADwQAAEDAgMFBgMGBAcBAAAAAAEAAhEDBAUSIQYxQVFhEyJxgZGhscHwIzJCUtHhBxQV8TNygpKywtJi/8QAGgEAAwEBAQEAAAAAAAAAAAAAAQIEAwAFBv/EACQRAAICAgIDAAIDAQAAAAAAAAABAhEDIQQxEiJBMnEFUYFh/9oADAMBAAIRAxEAPwDPqvFX8IG9UKg3onhDV5r6KS/WHdKS8X3lO1cdwpKxjeU/H7Fn0BguHrpehXmB1Qty5T1bTKESwymI1Ul8WonAllFc1LZELZvFd02gvXJjvoq2uGucubjDy0wnrDrNuUKC8smF3VbxMWJtK0MKaysnGoARoU6usWBu5C6OU1g0HdvRZyCdthYazdwSri1u0PAHNaSHNFPTkkTG3NNQQNQeCCOOW23dUVsAHEncpLm6DW97fyn4oRcXpd0Cnll+I3jCtsNXOLNiGjz/AGVCji9VjszSPM/ohbnnmvNlLcgto0TCttAWZKojrvGvVDcTu2F0jxSi2qWmN3upalZx3HQ8uCdTkhHFF/EH9oIAQKvbuHA+is5yOf11Vq1uJ394cRxCRzYyggEV8Ry/wsFpqU/MfFBXshFSTFcWjleXl5EU8vLy8uOPKSmFwpqa59BRyRqr1GrCpPaV6kTMLogYXssQykq1iOIAs3pfdTc3VeLi6AtPgC/YX+UkdV1iFbMZ6IcaRaVONQgxonVC7jRV7t4J0UdQQVwgAdC3eiuFM0Q1hlF8LbovIb0VFi5HcKSMZ4p7um9wpFxkala8fsSfQFUZKkK9TpFy9BGBcoXUBcV7rMYC6/kTllV20oKYJfougLllxDwvU2khQCgZldFbGldDPaYxDYJULcZHaCd0oQbN+WVDTokGVTBIwYy4jjmhDUCsrqHFx3krmnQL3BqYLTZZ7xDRqU9JAKlTGqmXIw6nQLgxSbmJzPPtz8V3/TDbvLXauEyeQCHYiS4x7clJmnb8V0bwjS8mVa1cuM6r7Rty7gT5FMGzezBrw52jOGm/qU+WGzLWiIBUks0Y6RXj405ryZmFthD3aBpPlKJUNkqzuEeK1a0wdreAHJEP5YLN8h/DaPEj9MVuNmKrR3gePDpwQmrZuZMtPLkt7r2YcIIlLeNbPgjTQevkjHPfYs+LXRjzXb9NPZStH4hOnLf+6K41hjqJkjunjCF27od9eHoqE7RG04umFLC4jUxu38D0Ko4/YQe0YO647vyu5fXRd0u67/5doRyKJlgLC0iQR8OI6j4JG6Y9WhOheVq+tixxHoeYO4qvlWqdmDVHK8vpavJ0gHxShRqSlvCLRwZsrWWyo/5OKgV3Dq0NUVS4BqBKjgvUwkGmdOCW6NnFUJwbejs/JLTK4dXlOgBG+w4dnuQCnTgwmi6uwGJepOl09UJDRLF1hvcmEv1GwSE2VLwZISxcsOYnmVzFHKlShHMKZog1F2pRzDNy8aXRWizeN7iQscG9P959xIePDetOP2DJ0AIRnB7cFBS6EWwy8yhekTB+5tWhqXK9IZ4G5ErzEJbvQptcEo/ArsJi30VvC7IOIVA19Fawa9DSNUUNIZamFgthCLnDWtEcVfrYsAN6G3d80kGVRjsxkTbP4JNdpJ05LWadtTt6D6xgBrSfQaLLtnsXZ2rRPFHf4kbQzRp2tM/fMvjkNwQzNxVnQVsTK10aznVDvc4+g1/VQULTPUDOLiB5byfipadOGgDg35f39UU2boA1m6ahpPqYH/Zea51Fs9CGO5JD/hNs1rGho0AA9Eco04QywpozRZ9FRo9F6PgHVdhnVdMCmY08pRoFkDqXRUrmlKKkdIVeu1N4ieQk43grajXNEajj+bgeiyW+oGi+DprB9YK3S8pkzCyv+IdnD80b9f1IVGCe6JeVDVoGWlMPbHLz03g+xV+hqwtnUd5p95HkfZUcBOrSdxJB8d4+BRXssjh0JH+kj4d4DyTy7MI9WCb+h2jQ6BImY9wP0/ZCuyTQynGZpG/69f2Qa7oQfryTQe6M8i+gypTVYhEHhUam9UIxOV9YYX1okwiVOzESi2civTui1RmuZledbnMB1R2jgucahBBBr785YBVFjyDJVu8ssro6o5RwPO3dwTigSreEtiVzS0E9VzXtSx5B4KyynLUkuzSHRWrOJ0BUldkASqzH9/wUt7VBhAUZ7IalMuHM7qXcLEhNeGM7q8ab0WHd4zuJA2g4rSL5vcWcbR8U/GfsLk6FqJKt0qBjRSYbQBKYf5IBq9TyomoVakru1pklWbujDo6ojaWYhNKWgxWwe4EaLiiDwRGtbd4BX6OHd3RGMgzQAqVHbiVFnRS/tYlDqdLvAdQq8WyeRcwtrhUDgNyu39Q1LkSfuj9vmj/9MFKm0xq7d0HP0BPkl1gjtH8TPoNQpObkt+KKOPD6EWMBpAjm4f8AEf8AZGti6Bc6o6NMwaP9Ij90Bp1ctqBxBJ9gfi1MGD4dcfyzDTrFktkNa0Hf+YzMrzsitUX4XTurNBsLYabkVayNFl1jiN3RqAOqEifxA+4Ke7LFw+Neaz8UijycvlBdeqXLGjvPDfEgKpd1IHks9vrCk6oXVHvqQT3RPjvTJL6K260aW2+okwKzCeWYKSo3SdOhCR8BNuzuiiwT+clzifB6ZKkNbmowOLma5XN45eRTevwT2+kVXjylIH8QKcs18j8k71qm8gyCJHmgu1GH9tbPgagSPL6KSEqkPkj5QMkwh8Nd0dPy+ZTNdunI7mC0+cEef6JXw0Q97ebT+iN0quakOgnzbLfmq5dkEFotXQyvnnB8JA+cKridMO74GhGbwBOo8nZvVErmlmpNcN4AB5mR+/sobJgJLDqD3h4OgOHrr5pU6dhatUJtd8EhViURxWzLHuad4MeI4fXRDlWmSssWbJKY2NblS3bPhE/50ZdUkk2FHxsdpA5p+wmm0s15LM2XEPBTRY41A1TUA42ipNa6RzTRgGU0teSQ8Xvg8yDxRfC8YytjonSAVdpKLRU04lVA2GRzUOIXueoY1X1tUktb1SyHj0Ca+jioiZRvFsNytDuaChqKWxB3wYaJvw0aJXwqnDQmzDh3V4mVU2i2LsnxAdxZrtIdT4rTMS+4su2mdqfFacRewuXoo4XWAMo1Wvu7olei0hdvru3L0/Emstuq5nI3b1RCWKYJMq9TqkBGSDF7ChqAvRZl0A1KRqmZUtO9IELlEMnsLXxzohs3hjC9pcJ1G9CadWWq3Y412T26TqFXhTMZse9oy3s6jtO4wMb/AJqhg+Yax/8AvWfR9n4yfdHsSxbtaWXgS57vHRrfRo90r1a+gbyb8wvPy7kVY9I6rVu4Wz+L9R9eKu222NdgbSosOVumkFziJk6gjjy4IHWf3S7mRH+4pksdns9NrSDJ1OkzmA4cdwWVR+mq83qIwYZjT69NhrNcA+cprBhpPLSQWMrMDcjpBjMD4q5hImvDJERoeCntaQoWhtSwFpJccwBc4k743BFNkbBrHaNgxMb4nVZZXHqJVhjOrkxlxW3HZa8vdZhit4+nDKTQ6o7Ugzw3l3EAe61u7ZLYKVcZwtwPaMaCDvjQzBHnvKC09hcb+mS2mLXdSoGB1Mk/hcGgE/dDTGsnSBMlN2AbS1m1OwuKbmmYAdrl6Bx3jxVzC9nGNqCqBlc0y3eYPOCIkcOCaBhDapz1CXEHSeenstZSi4/9MIwlGXeis2lxbuJJ9VZFPukHjIRH+TDWqpVMAqaqZUnaMJvaPZXj28AXN996vWDdHt5OPoQD8lztywNuyRxI16Erq1dBa4fiEnygH4qp7imQrUmg5SbNJs/lB8hH7qC0bDp5GPJ0fofVTueGtpjq6PAZVE9uV/Qg+wBHslsNA/aq11LgOTx1a7f6O/5JRFKXQtExOkH02nfHdP8AlIg+x9kn2Nv9oWkbjB8lvin6mGWFSKhsjEqnUBmE417MZUv9gM8HmnjOzNxojp2BI0Udam5oIKdMPsQWg9EHxy1gkpoy2BoW6NOVfNs9rZ5qTCqALkxXlh3Atb2LQqWFGSSUTsKE1B0UtK1ABhVaV1leUGrYU6VBjaZzezAG9LWHxGqkxPEy8lvAIZmITRVCs1ClSHBHcPGiV8NvQ5o5pqsPuheNzI+MyvC7R7GnxTPgssxd2d8dVoW1VzDCswbWzVCeSbhx+gyv4EqNkIQ26oQUbZcDKhNxWkq6LdmTSCGGYXmAVq9w/K3cruCVAGiVLilyIXNsMULTLaV6rbQNyt2rxJUt28ZUybs6SBLK5bop7S1dUM9VSyku01WmbF7Pl9EOc2PFelBqELJXtic95FM+g+vJB31Jc7wj0RbHn5XZBpDnD0Jn5pfnjzXjtW2XXpBLBrQ16jKfCZJ5c1rFjaloHdJA03cFnmwhAf1h3xb+i1ewdIUuZ+9FvHjcLIOynvEAAbh15lW9lyTUJVXFL5rWkcOJHLoq+zeP0WucAZHAgjhvB6rJdlPSHq6dovlKC3KUIxHaW1ptDq1RtNscSNegHE+Cgt8Xp1Wtr0CXMJg8JHOCtnpWZJXoMGzAUrKIC9bXIcpa7gAuQrRUvHgBL13WV28uZlCWNLjKym7ZrBUjLtvqDu3mNCBHiBquMMZmp6fgcQPAgA/AeiY/4kMa3sSd/ePol3ZpxdTfzguHiBuVMHcP0Q5I1k/YwYlT0p8of7hh+SpXRh7J5gHzaW/JFL6HNaOpA5w4OH14IXiYgMdyd/6hD7QfhPQfEtPGEBvh2dd/V0+uvzR66Zl1nd8igG1B1Y/m0g+LY/VNhWxM3RNdXvd3oEy4HaSeaqVLknjovMpk6qpQolcrHWyxAAaFB8avM0hCW3DmhVzWLt6MY7A5BbB6oBlMF5edzTck+m0t1Uta/cRl4LStihZtYZCQl59Q5ieqacJwsupSlm9pZXuB5po7ZzKyv2lgXtkBQWto6oYC0LZfBIpQ7fvTgYpYNekOAK07D6v2YKx63dDgeq0jC737IDovP/kcfTN+PL4VNsK/dhZ2Za5O+OvzmEp4hRjVLx14xOy7ZwLsgKHOSVEAiNjZlwVOkZ9k1teubxUta/zBd18Pyt3Ki2mhpjLsmZXhfKt1IXQtS5QXFsWp8aTYJ6C+z1IZ5K2vZd47MRHy9VgFtcuZqCmxu2VRloabfvvBEjg0yPLercyqFswjt0AMYrCpXrvnQveG8tXbx0QxzPT5KRmjevzK5eV5VlgR2buMlYdZHx/Zaja3ZyiDvWO0XFpDhwIPnMwtLwqvo3kFJnjuy7iy04jEKILHBwnMIPmgtlso0uIBDSZlwGp8UZdetygDzKjsMet2vh1TzAJE+KSLooYUtdlaL6Qp12NqxGrmDhxBOoKJYVs/St25WTlG4E6DwVVu0luw9magzc4OXzduRejete3Mx7Xjm0grXyT0Zu4/6cVaUaj+6hua5jVcvuj90qsTI16pHo5OyjXfwCsWlGAuQzcp3OABSJDNmZfxKeHVWt/IyY/zOP8A5Q3A6RY5k6Zw6Y9D8fZR4liRq39Z+hYHQJEgCmCNx04Eq/TeO2otH5HE+gn3KpjFojlJN2gjbd5+X8pn0Lh8SqGOvy5W8zoOk/3XOF3X2tX09Xk/MqntLcfbNH5e77CfeUa3Yl6DVRzHjfpGXzPH4pSx5xNMA72vg/7SPkFabdGNNzTPn9BVtpSMsj8RB9tU2P8AIXJ0AKNPMUw2WHSAgtmdQm7DqoaIK3ySMIKwLitpHBDrG1LnhHMYuBqFQwz7wRi9Aa2Ff6dDCSOCBC1moB1To+s3s0Fw6hnriN0poyA0O+zeHfY6jeEgbZ2GSqXAaLXbClkpjwSrtdhnaNJhGLpnMzrCLprDrotO2cxBhp5gd6yO4pFri08EcwvF+zpgStzNoCMCZ8MuobCA29FEaRyqPlZYv1PW43Bbg5MJF2YoZiVBX6JXVzSkLKLokkhQAgpiwUjSUIxC3gyurK8LVs9oxWmNd7GVL1SM0BSV8RlsTqqjHaylSaRommxrwKyzqfHcCIYSAiOxdGSE83+Fh7N3BaY3TEmYCWwYPBS9ockcEb2rwc0XkgaIJUpSwRw36K/PO8JjjjUyGeS5qOhSijlEuMe5VGoZ8PdeUkUt0cmqfLkVomyl+KtHX7wGU+Ij+6zpoko7slcmnWLeBExzj9p9EuaHlH9DcfI4z/Y4YnTquY4NcAI3ayfPgqWFYKao/wAYCPwwBBHMHgm2kG1GZT9dVQp4DVD5puDTzIlRpnpxSW2eo4E0CXXJGm5gG/lBzarqzwGpmBoValPX7zg1p88uh8wjWH7P15l1YnmMrR8Ama1w1rBu1TJf2gzmvgMtcOq04c6u6pzzNAE9IUt1cAAHifoopWaEv3gDnxOiMjKPZLSfJlANrsdFCk4g94gho5uO703+SIXl+2lTc89d28+CyrGrt9eoXv8A9I4ALooGR10DsKJHaOPIz5wD8SjNjXBrOqHcKZ9CdfPRArN2jvDXycrdrWhjyOOnxHz9lTIigT4deR2jz+Zx8SN3uVXr1C4gnfr6kD5qlQq90DqVZttTPKf2XNbOTCeGW8tf4fsqeOtmm3oUY2ffIqdf7qnilGWgch80I6kNJXEVmPgyidLECAhlZkGFzKqaTJbouXN5nXFpcFplVmhE6FkSNy7SOLn9U7pBKYNi7fM4FJFeiQYWlbBNEBDVDKLex1qaNhUa1IOaQVbuSq7tyIDLNrsLyuLgEqrXdo7IVGFZTe0Cx5BWsXoRjJidl2b+hVQpu2jsszSR4pRXmZo1I+p4eVZMRaoOV+kJQu2ciVuU8ejxc8fHI0UsRtNEtVmZTCe69PM1K2LW0araEiaaBUq9ZNlwCpUwjeC0czx4p5MWBpmxltDQtBpMlsJV2YoQ0JspHRFHMS9t8JzUnuAEgTru0WQ3FVzBlOnGAt02wZNLpIzcgJ1Kw26ompL/AMxcW6cBoPglySdUNjB1VwOp81XawvMD6CuVLfuT4KsGEahJFo6aZ8AjR2hV23qZXNePvNM+I4j0VSs/MZK5t3nd5jyRYE6ZpmB4kDGUyCJaenI8iNyd8Mug4QCJ6/JZPsiW1GupnQg5muG8TvHUdEfqYhUoOgzI1BAMH9FHKNS0ejDJcdmm0Kusbj10Cum5A3lZUduBI3yOIXb9utCMpPt6o7C5IfMSxJoB1SvWxdgJbMuPJLT8TrV5IpuIM7hw4CSiezODPc4veMsc9/h0StHeX9FnE2F1KXeQ5D9Ui4pTykwtOxS2JYWjTRZrjFOXZeZj9Su+pAl1YApGPNT54pxzJUFd2Z+m4bvAKUshvjKqZEilRdr5o3QpRScenx3ITRoayjLn/YOPMn20QmHGizs/VgnqiV3SkE80GwNpJJ5R7mUwvGkLN9miWhKxShBlDU0YnbzKWqzIMKrHK0TZI0yezbqE3WlEFspNtqsEJioYhpC6dgi0UcTow5M2xt7kOUpXfUzOVu3rFjg4cFhOdSR6/E4ynid/TXe0zAFRVShGBYiHtGqJVnKlO0eVlg4Sple4EghZ9tNhnekDin6s5BMUpB0JjMKVW52wkbFbbI88inW3qIPtJaSJHiss0PKJ6H8dm8J+L6Yr0nQURoPQpxgq5QqKaD0b8+FTsL06iH4lbypaVRTuEhOmQ1YmXFPK5MGyoBePFVMUtFJs9UyVB4wtJT0Px8DnJo27A2Q0I5TKBbP1ZYPBHGrWPRPki4yoixWxFai+mdMw38jvB9VieMWbrdzaFQQWVHAHm12rT6z6rZcT2gt7ZpdVeQOjXH4BZVtvtha3mVtGk4lp/wARwA7vFsb0s1aBB0wDWtstOoDwLXDq1xQ2vUH3WjTjG8n5BWr2sSzLOobv5tPeBQSrUgQsYws1lOjuuQOEdFDS1Mrq3ol5DQrjLHQluoBAJ5uPAdE7pGatstYFVyuDhvB/T90/PDazA4cQkzBLTuudxHyTNg9TLmaN0Zo+Klm/Ysx/jQNr4ewk5hB57teaL08CpCmwnV3ED2UDmZi7MNJ3eEI9h9rTIaSCe60ETpxO4eIQsZIt4S1jZZpuDm9UVouh0kQOXwlUhSawhzWgcDz4j68FbecwBHELh6K2IPl2RvGZWd460ds9rdMoyjlJ3n4LQ7popsJO+CZ+Sy++ue893EuJ9Suj+Qs/xKFCwGvMkADpEmfX2RSph7S3SNB6eX1wQ2neGOcTz0lSnECGkN5a89BrrxWztk68UgMHHNr4Kw+r9kW8Q72KjeJM84P6qatT3HnCd9ma0g1s80Cn1OvyRMuQ7CyMohXKlYCdCdJ4LJ9m66OLqjISxittCa7e4a8ae6FYpST45UzLJG0KYKkNY7gvXLIK9QZJVN6J4xt0EbJuitOUdEQF24qCTtn1OGPhjSCuA4gWOyk6J4o3OYBZfmjVNGBYlIAKowy+Hm8/D5eyGOu5CryortWpIQe8qaqhnjn/2Q==" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="cs-article-info">
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
                        <div class="cs-article">
                            <article class="cs-article-total">
                                <div class="cs-article-row">
                                    <div class="cs-article-image-holder">
                                        <div class="cs-article-image">
                                            <a class="cs-article-image-profile" href="https://open.spotify.com/"><img class="cs-3-articles-image" src="data:image/jpeg;base64,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" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="cs-article-info">
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
                        <div class="cs-article">
                            <article class="cs-article-total">
                                <div class="cs-article-row">
                                    <div class="cs-article-image-holder">
                                        <div class="cs-article-image">
                                            <a class="cs-article-image-profile" href="https://open.spotify.com/"><img class="cs-3-articles-image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbblNszjP1BWqmXZ5bPKdjjx7bhezS6m0x_A&s" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="cs-article-info">
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
                                                    <a class="cs-article-image-profile" href="https://open.spotify.com/"><img class="cs-3-articles-image" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAFwAXAMBEQACEQEDEQH/xAAcAAACAwEBAQEAAAAAAAAAAAAFBgMEBwIBCAD/xAA6EAACAQMCAwYDBAgHAAAAAAABAgMABBEFIQYSMRMiQVFhcRQygRVSkaEjM0JDcrHB0Qc0RGKCwvD/xAAaAQABBQEAAAAAAAAAAAAAAAAEAAECAwUG/8QAMREAAgICAQMCBQEHBQAAAAAAAAECAwQRIQUSMQZBEyIyUXGRFCNDYYGh0RUzQlKx/9oADAMBAAIRAxEAPwAXP8u9RECbg7fWmY5JCe7TIQ18PW0Gk6W+rX5CSXGFjz1WM9Pqx3/CpoiGOH9Zhv5ZXTlEUTcu/U+tIQdn4zgs5fholjI5diGyQceNJCM11ni6SfUmVnVombB9KcQGv7/nJwcmpaECrhiwz50hEanuUhEUrGkI/JcEDH9aQxpfE1gIJDJEO6TuKysHK+LHTC76u17Qp3A2rQBzkkLEA+eViAceXj+VMhmXeOdal7SHTI8BY+V5f4yM49hmpjJAW11R7awMXOV3yd/E0hypcajM8jFHOCThj8x96QgbJOwkDOTnIz60hBMuW73nvVpEngtLi6j/AEUTN642qI5N9mtD/mJkU/dG5pbEWYdNTHP8LIwH7UuEX86bYjo3Gkwnkml01H8VLscUhjSdfhElo+fKuP6Zb22pGxkR3FmfTJ3eldVsySnPcJa3No0qlo1ftGA8cYxTx8ia4AerXZuNRubiQkvJIWxmpiBTyHnJJPLSEXQAYA3aoGJ5QhPeO2c48qQi/pGjXWv3CWunQFpcAux2SMeLMx2A96QjQNK4JgsECzSC/nXq2CsS+2d29zT7GK+t6toGkhor7UEllX/TWg5iPQ42H1pCEnUOOHYlNHsIbRfCWQc8h/oPzpD6Fy71C8v3LXl3LLnwZ9vw6U2yaiiNYjj5aiyxJH0zPZi8tyrPykjGa4eNjxch8eA1zc46Eu+0RYpXgiuld1O4IxityrrEZLco6BP2dyeo8ixrug6o7jsLYyoY+UlDnG+elGw6ljPhy0QdM/ApXUFzDIwubaWIgn50Io2Ftc/pkmVuMl5RWcDFWERh4Y4cu9XkSe5Q29kn791wWHkuevv0/lSEON5xfoXC9l8DpUIl5f2IjsW82bxP40hCDr3Gms63zRmdobc9IYSVB9z1P/tqQhfigklblBAPqcU6EwuvDN+cYijTIzl5Nz+FDPLq+5r19EzJrekv6lmLhG/PWe2X/ix/61VPPrj7MIXp3J95L+/+C9FwDfyIGW+s9/8Aa39qHfV6k9drKZdFvi9OS/ubpC+FwfDasHrFPw8juXuCVPcdCDxsLqyvlmtYZGS4cBiOgxRPSbKv4mnoqmrIS7q2cWNxq66n2VnaSkOFJJ+QedW50sO6HdwiMfivnY+yWcFxEFuYI2JG+V8a5lWSg/legz2Bi8I6EZxONOgEoOQ3IDg+eOlH0dXyavff5ISqjIra1wXHqylGv7qJfuo+B/Ki4deyU9tJkfgQFHUP8IVEZa01GUv4CRQR+WKKr9Qy388P0IvHj7MUNW4P1fR89vCHiH7yMZ/GtbH6nj38RfP8yHwGhdmV4nBzuNxWhFlcojNpusXzxophaZGzyupJYH29KBtohtvejpen9Rv+HGMo7X39ybTb2/OqpNd5CsxRYi57xx0A6bZHl1qF1cPhNRLcbJyHk91vCfsE+y4llZpLCGHsWY/r5BzA+I2IoVywY8WPn8ELrM5zfYlr+Zp2o6pb6ZbmefmMeAdhmis/plmalGvycxG5V8sT9R4+Zu5a2Yx4NJTY3pWMXu6f6EZZjf0ghuMdYJzHMkY8lStyr0909LmOwd5Fn3JIOONahYF3ilHky4qF3pjAsXCaJxyrEHtL/wAQ4ppBFd2cqyE7GMF/y61z+X6Qsh81M9/kKhlp/UNVjxJpl3kRXShl+ZW7pX3B6Vz93SM2h/NAIjbCXuE3nhZQySoQfWgpU2L/AIsn3IoXQSRSrgMD51GG14JiFxNwPBeB7iwUJJ1KeBrdwuqyr1C3lFc60zOhHd6RcvH2TqynGP6b+FdIpV3R37EabbcaW4HttLeLNHNFC+Y8sOfcZ88UpRg04v3LI5dqkpJcrf6v3O/t/VlZgl00S8xPKNxvvtUf2ejX07K5ZOROTffr8GvXo+0dDKNueyx9a0sd6kmZc/BmM6kZyNwcGtiS9yiP2IC3LSiyRNaI11cxQRkc8jBVz0yat7klsjoYNZupdHW306OC3S5tiH+Ij3Le+1UQirNy+5JcAf7avkN0SY2Nz8+V/lU3VHgkmW7fVYJ47O3kWW37MgSzJIcsKq+BHnhPf8h239w5Y8T/AAWoGBpZbjTiQqXDjdSfA1y3VehQnD4lK1L7B1F78MdI5VkUOrBlI2IriJRcZOLDU9oBcWcOpqMPxVso7dRuPvCtHp+c6Zdk/AzWxEePs+aN15WGxB8K6WMlJbRHwgVd/Dmc5iUkbHu1ck9FLktmraLJzwSRHwO3saLremBS8CJrlv8AD6lcRAbc2R9a26pd0ECvSkC3iZ/lUk+1V2XV18yegirHtueq4tnkdvMHDA8pHQ0DZ1imHEeTZx/T2TZzP5S8lv2jc00jO56kmsy3rd74gkjdx/TOLH622S/BQnqKG/1fL/7B66Bga+gjbT0ByjEUVV126P1rYFf6Yxp/7baI2tysbxSyN2Lb93zo6HVabuHwzGyfT+Rj/NH5kE+EuJ3sGFpesWtycKx/YrO6t0eOVF21cS/9MuNjrfbI0y1nWWMMjBkYbY6VwllcoScZeUGJ7Wxf4zs7OLRp7nsEEu2Gx45rT6XdY71DfBCfgyoq7ElIJ5B94V1RSomo6S/Z3ajwfark9MEKHGFkqXcc/KO+OUmqMvLurSjF6R0vRsHGui3OO2gFyLgYFY8rJze5M6uuqFa1FaIZF3p0yejlTg05NE6tVbRYmd5piRHKMiniyEkCru13Z08euK6DpmX/AA5P8HG9d6dr9/WvyG+FuKm0w/D3vM9vnYgZK1Dq3RFl/PVxI5qq/s4Yc4v1qx1LSI47SYPzOCQD0Fc/h9OyMW/dsdBcbIz8CcGGP1Y+tbGy3SRpMWj6h2xWOxuTJCVLqIzlc7jIovRmnvFtlK2m/pIXSWPlJVlII+lDZkO6vZ0HQr+y7T9xNFvOqFnt5lTc8zRkD8ayXXJc6OwjbW3pSX6oj+GmfPJDI2ASeVCcAdT9KdRk/CJOyC8tFYrvT7Jo7iR3OEUsfQUwnOMfLLUljdRws7REYGQCdzUo1NsDt6rj1++xcm4iCOU+HYEHBDbEUYsB63syLPU1aeowZc0+8h1BSY9nHzIeoqudc6ZJhVHUKc6DS/Qo3URjlbY4zXUYWTG6tfc4vqGFPGtfHHsewjPyj3OelD9RluSRTj8IILlBj5vXBrJcQ5SNnPEGnSXV7I5lKTGFkDwhw/IpBDrkZG/n1waL2Z522s297cXksMZkhkaMFGHKSABn8xt9KXlF1P1edC5JrrXuowwx6XeziMyRXEKAMJUcMCMj+IfhWfK7b1pnSwwI11uTsit6af2a1/hhyws9d1SQi702SCGS35ZgZFRZJjzFnyO8uSRjH19Loqyb5joBvli0L93NSafHHhcaXPD/AKixBwta22DcM8zY6MvKB9KGWPFeQy/rd1n0LSLgtordeWGNVHoKfsS8IBlkWWcyYM1HdGz1Ap9EWzPOJNP7WZpolCy573qKJqs1wwS+pS5XkA2E7Wd6km4IbDA+VXWRU4NFeJc6L1IbJAku+Mg71lV2Tqe4vTO8lVXkVpTW0ym4MLARg+e3nWgsidy7pnIZ2JXj3OFfg6W7Uj9MrlvNSQKltMC1JD8zEZqS8A8vIW4SXtpbtXJwqqcDx3xU4jI0zTIYreOKOFFRCCxCjqfOpJL2E5uT5ZbLkSkDp5UhgLxNYW4i+KVOWUsFbHQ+p9aHuS13BFEm32sTrpRjOKoCVwA79Ryn2qLLRK1YDnPvUokZC3qMEbB3I7yjYir65PegayCa2XdEmeW0HOc8pwKEyopS4Op6LfOzH1L2B9/ezwXsnI/dGO6dxRdEU60c/wBVsksuRciu2eMM0ceSPI/3qztQD8Vn/9k=" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="cs-article-info">
                                                <span class="cs-final-row-2-info"><span class="cs-final-row-2-link"><a class="cs-info" href="https://www.dailygamecock.com/section/arts-culture">Sports</a></span></span>
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
                                                <span class="cs-final-row-2-info"><span class="cs-final-row-2-link"><a class="cs-info" href="https://www.dailygamecock.com/section/arts-culture">Sports</a></span></span>
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
                            <hr class="cs-custom-hr">
                            <div class="cs-final-row-2">
                                <span class="cs-final-row-2-info"><span class="cs-final-row-2-link"><a class="cs-info" href="https://www.dailygamecock.com/section/arts-culture">Sports</a></span></span>
                                <h1 class="cs-final-row-2-header"><a class="cs-text" href="">How the recent events of your mom has shaped the world</a></h1>
                                <span class="cs-article-author">
                                    By <a class="cs-link-author" href="https://www.dailygamecock.com/staff/tyler-sprague">Tyler Sprague</a> |                         
                                    <span class="cs-school-time">10:33pm
                                    </span>
                                    <p>THe blahla alfh alfhaf alfh alfhla flahf alhf lahf</p>
                                </span>
                            </div>
                            <hr class="cs-custom-hr">
                            <div class="cs-final-row-3">
                                <div class="cs-final-row-1-column">
                                    <article class="cs-article-total">
                                        <div class="cs-article-row">
                                            <div class="cs-article-image-holder">
                                                <div class="cs-article-image">
                                                    <a class="cs-article-image-profile" href="https://open.spotify.com/"><img class="cs-3-articles-image" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAFwAXAMBIgACEQEDEQH/xAAbAAACAwEBAQAAAAAAAAAAAAADBAIFBgEAB//EADUQAAIBAwIEBAQEBQUAAAAAAAECAwAEERIhBRMxQSJRYZEGFHGBIzJCoVLB0eHwFSQzYrH/xAAZAQADAQEBAAAAAAAAAAAAAAACAwQBAAX/xAAkEQACAgICAQMFAAAAAAAAAAABAgARAyESMQRBUaETFCJxkf/aAAwDAQACEQMRAD8A+RjAOwNFTBPQip8lfzEj60RY1zgEH6VEWE9oIbkVXVUkhOaYitvPJHlTIgwvSktkAjRiuIQbS/lyOlWkYyKX+XBbIGMetMRERsoz4T5DJNLyHl1HLi4wyxgihvDk4xTcaYyamsJfw4qbnU1ksSuhBVmT12rl8GFsTGisT1Bp82TiTWvQddqVu0Okoyhg36Sv79RTEcFhUQyECpm2gYyeIBSTvgdKMEAABRGx35bU3JDJzxGoRCWAGExj969HBKqDQjsCM5Kt/I1fzsRIxSSw4zgbYokMWkZP0o0SESEnuNvIUR1GnC1Kz+kpUCp6EDyoxxp86Dpf9ArwPZutJIuMVqnHdSdJ2pZSyPpySAeg7+1dl3Y4GcV2EozAcwKP4dxTlFCaWuWkDmQAhSB6jFWlsnftjc0nbKBHgU/aMm4Y15+U+0MCoaMKWdNO2O9ItAslysYnXqcKV/tVlb20snEeWF8LJn96LdWEUSuukyYO50E96Sr8TOq5i+JqiXrAOWCtjVjGcU1bJMsEYt7lwoUZBK4Bx2z2oXEFIuX7AP0K4rQ2/D7pol/3NuAFAGVPTA8zXol6QTisz1lEzI3NOM1P5Qq+NWQe9WEEEiQYZCGHnXhHqyMYpJy7NRCrrcWiiVOldkgViWXY+lHZOWu9CLYNCGJNx2pXPasS3p12qccIRspHk+dNjxczHepRxsOo2NNOQwaENbk4GRv5UzAA16vkVyKjFH+FqU+Lyo0UfKuLeRs6dWGz5VKx7hzTcFQHikBdc6lK9PvWsa1iYrmPTg9xiqOOMWs3C7geFVnCtn19e+wrS8SIZ9nXQvU52rz26uT5HPMAT4fx5NXEbwg7c18e5ra2A5NqiShScA5IG+QPpWJ4pIrzzOCMksetfQrRFa2jJfB0jqKu8rIVxrKVFyhmjB3jGod6r3BBZlGAKct1+dl5NsHRgOp22HU1acS4PFZ2kQlkEksi5JBG1CLEGwJlWPNPn6UtPqRzlcAbVatJaWbYkkXUOu+fttUb1bS4iilhu4GMhwVyQU+u2KoS/bUxhK+EDGT3qy4Pc2MV4P8AUA7Q4wQigtnbzNLG3aQKkKEn/qCT7da7Y8IvL6cx28LuykbKMmtIvucQQJfTXPCHDCztpidPhD4GKUuZBLH/AMZGOpq34RwRoIllvo+TEI+Y0kmQFXuacveDcIuuE3F5ZcVjbQCSjeHywMHHUke9ThGY2BM+qi6mZm447QRxTuQEYEHPemovjeW2tJoIoo5GkBUyOu6k9xWOurW8aW7SNAGt3ZWXUMjc7epqiN9PAzLMcj0NW4/CU7HcVlzACmGjLe+lVAMHUSe1aWH4ttOUgkRw4UA6X2z7V88lvw8ZGpg2dhilDcPnYmq28FcqgP6RH3wQ2s3158azwRSxxfKs8pOt0Rhn75rP3HxTd3EoLMxA2wCTkVRGIiIsW6Y2885/pReH7GVycFUP705fEwoLq5Kc+RmAGpd3fE5bv5QWqKblNxy16DbGoZI60rxP4j4tKgt7povDsRyEDe+M0rZ8SNtO5SBcY/KDjB8/pUeKXL3UKl449f59ajGQe1MXGFaq1DyZuaFg55RvgfG+IW99EbCcxzt4Qw229a0fw78QcS4RxmYxJCJ5hgtIC22QSOu+e+awttrhDSgEMuNJ+uaftuJXS3q3K4L6cb9+1dlw3fGb43kLVZL7+JtLz4845xNpeG6kihjjMTxhcjHT+9ZO4kuI7mWAStmNOYpPWq2S6m+aknSRoy2+V79q4bh5vxGduacrqG22KxcFG4J8hOJUd38S24ZLcnh91cQ3ZQhiTnP33zt1qnuZRIVI1ZAwcmmOHXXy9ndxlscxPCPM/wCYpUpiNWY7nI2pirTGDlyc8aAe2/7AljUTkdaKFAOG2rzbfpz6025JxJjWCI3LLncHTnHTNDVmiSQbeID/ANrhZiuSTuMH3och/Ex2zihAjGb1EJECUkY/w7H7iiO2TjuQce9Ri2hfFTRQ10qnocCsuEBQAjHLWS2kkYkL4QB6DypTmZmBUeEHA001c5NsTk+FigA6AA1XsdOSu1Yu4WQ0QBDBGlRyo7g/ehpG2o6fEBvkUZTpihA21Ak+tFuRygSncdDW8t1MKWLiJDKx22yetGtYi+vUchVz9OtCnYsY89MfzNNx+G1kK7Erv71pOotF/L9RMoWYk4x1zmmFIVF8Q3Gd6g6gIcDsK62BjYVx3CUVP//Z" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="cs-article-info">
                                                <span class="cs-final-row-2-info"><span class="cs-final-row-2-link"><a class="cs-info" href="https://www.dailygamecock.com/section/arts-culture">Sports</a></span></span>
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
                                                <span class="cs-final-row-2-info"><span class="cs-final-row-2-link"><a class="cs-info" href="https://www.dailygamecock.com/section/arts-culture">Sports</a></span></span>
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
                            <a href="https://spotify.com">
                                <img class="cs-final-add" src="data:image/jpeg;base64,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" alt="">
                            </a>
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
                    <a href="news.php" class="cs-link">News</a>
                </li>
                <li class="cs-li">
                    <a href="sports.php" class="cs-link">Sports</a>
                </li>
                <li class="cs-li">
                    <a href="specials.php" class="cs-link">Specials</a>
                </li>
                <li class="cs-li">
                    <a href="opinion.php" class="cs-link">Opinion</a>
                </li>
                <li class="cs-li">
                    <a href="culture.php" class="cs-link">Culture</a>
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
    </body>
</html>