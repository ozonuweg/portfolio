<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text&family=Orbitron:wght@600&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="./css/small.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./css/medium.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./css/large.css?v=<?php echo time(); ?>">

    <title>PHP Motors Home Page</title>
</head>

<body>
    <header>
        <?php require $_SERVER['DOCUMENT_ROOT'].'/snippets/header.php'; ?>
    </header>

    <nav>
    <?php require $_SERVER['DOCUMENT_ROOT'].'/snippets/nav.php'; ?> 
    </nav>

    <main>
        <h1 class="greeting">Welcome to PHP Motors!</h1>
        <div class="container">
            <img src="./images/delorean.jpg" alt="Delorean Image as a banner">
            <div class="delorean-attributes">
                <h2 class="attributes">DMC Delorean</h2>
                <p>3 Cup holders<br>Superman doors<br>Fuzzy dice!</p>
            </div>
            <div class="button">
                <button type="button">Own Today</button>
            </div>
        </div>

        <div class="content">
            <section class="reviews">
                <h2>DMC Delorean Reviews</h2>
                <ul>
                    <li class="review-list">"So fast it's almost like traveling in time." (4/5)</li>
                    <li class="review-list">"Coolest ride on the road." (5/5)</li>
                    <li class="review-list">"I'm feeling Marty McFly!" (5/5)</li>
                    <li class="review-list">"The most futuristic ride of our day." (4.5/5)</li>
                    <li class="review-list">"80's livin and I love it!" (5/5)</li>
                </ul>
            </section>

            <section class="upgrades">
                <h2>Delorean Upgrades</h2>
                <div class="grid-container">
                    <div class="grid-item">
                        <div class="grid-img">
                            <img src="./images/upgrades/flux-cap.png" alt="flux capacitor">
                        </div>
                        <a href="#">Flux Capacitor</a>
                    </div>
                    <div class="grid-item">
                        <div class="grid-img">
                            <img src="./images/upgrades/flame.jpg" alt="flame decals">
                        </div>
                        <a href="#">Flame Decals</a>
                    </div>
                    <div class="grid-item">
                        <div class="grid-img">
                            <img src="./images/upgrades/bumper_sticker.jpg" alt="bumper stickers">
                        </div>
                        <a href="#">Bumper Stickers</a>
                    </div>
                    <div class="grid-item">
                        <div class="grid-img">
                            <img src="./images/upgrades/hub-cap.jpg" alt="hub cap">
                        </div>
                        <a href="#">Hub Caps</a>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <footer>
        <?php require $_SERVER['DOCUMENT_ROOT'].'/snippets/footer.php'; ?>
    </footer>
</body>