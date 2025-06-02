<?php
include("../../includes/session-check.php");
include("../../includes/config/database.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Apartments</title>
    <link rel="stylesheet" href="../../assets/css/pages/my-apartment.css">
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
    <section id="content">
        <h2>My Apartments</h2>

    </section>
    <script src="../../assets/js/pages/user-data.js"></script>
</body>

</html>
