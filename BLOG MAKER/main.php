<?php
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
    <form action="logout.php" method="post">
        <button name="logout" id="logout-button" type="submit">X</button>
    </form>
    <h1>Find Rooms</h1>
    <section id="tabs">
        <a href="main.php">Apartments</a>
        <a href="my-apartment.php">My Apartments</a>
    </section>
    
    <section id="apartments">
        <div id="posts-container">

            <div class="post-body" data-post-id="1">
                <div class="post-head">
                    <div class="post-number">001</div>
                </div>
                <div class="post-content"></div>
                <div class="post-interactions">
                    <button class="like-btn" data-post-id="1">Like</button>
                    <div class="reaction-tab" data-post-id="1"></div>
                    <button class="share-btn" data-post-id="1">Share</button>
                </div>

        </div>
    </section>
    <script src="main.js"></script>
</body>
</html>