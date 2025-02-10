<input?php
    include("session-check.php");
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Rantal Apartment</title>
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>
        <header>
            <form action="logout.php" method="post">
                <button name="logout" id="logout-button" type="submit">X</button>
            </form>
            <section id="tabs">
                <a href="main.php">Apartments</a>
                <a href="my-apartment.php">My Apartments</a>
            </section>
        </header>

        <section id="apartments">
            <div id="posts-container">

                <!-- should be given by the server -->
                <div class="post-body">
                    <div class="post-head">
                        <div class="post-number">001</div>
                    </div>
                    <div class="post-content"></div>
                    <form method="post" class="post-interactions" data-post-id="1">
                        <button class="like-btn" type="button" name="like">Like</button>
                        <div class="reaction-tab"></div>
                        <button class="comment-btn" type="button" name="comment">Comment</button>
                        <button class="share-btn" type="button" name="share">Share</button>
                    </form>
                </div>

            </div>
        </section>
        <script src="main.js"></script>
    </body>

    </html>