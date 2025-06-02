<input?php
    include("session-check.php");
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
        </section>
        <script src="../../assets/js/pages/main.js"></script>
    </body>

    </html>
