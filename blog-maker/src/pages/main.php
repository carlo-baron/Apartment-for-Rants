<?php
    include("../../includes/session-check.php");
    include("../../includes/config/database.php"); 
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Rantal Apartment</title>
        <link rel="stylesheet" href="../../assets/css/pages/main.css">
        <link rel="stylesheet" href="../../assets/css/styles.css">
    </head>

    <body>
        <header>
            <button id="create-post">HELLO</button>
            <form action="../../src/auth/logout.php" method="post">
                <button name="logout" id="logout-button" type="submit">X</button>
            </form>
            <section id="tabs">
                <a href="../../src/pages/main.php">Apartments</a>
                <a href="../../src/pages/my-apartment.php">My Apartments</a>
            </section>
        </header>

        <section id="apartments">
            <div id="posts-container"></div>
            <div id="modal">
                <div class="comment-container">
                    <div class="comment-head">
                        <h2>Poster<button id="exit-modal">X</button></h2>
                    </div>
                    <div id="comment-post"></div>
                    <form class="comment-form">
                        <input type="text" name="comment" required>
                        <input type="submit" name="submit" value="Submit">
                    </form>
                </div>
            </div>
        </section>
        <script src="../../assets/js/pages/main/load-post.js"></script>
        <script src="../../assets/js/pages/main/redirect.js"></script>
        <script src="../../assets/js/pages/main/post-interaction.js"></script>
        <script src="../../assets/js/pages/main/make-comment.js"></script>
    </body>

    </html>
