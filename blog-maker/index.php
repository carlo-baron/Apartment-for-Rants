<?php
    include("includes/session-check.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=2.0">
    <title>Rantal Apartment</title>
    <link rel="stylesheet" href="assets/css/auth/login.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <img src="assets/images/DAY-BG.png" alt="Apartment-PixelArt" id="day" class="bg">
    <img src="assets/images/NIGHT-BG.png" alt="Apartment-PixelArt" id="night" class="bg">
    <section id="container">
        <div id="brand">
            <h1>rantals.</h1>
            <h3>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis, eum.</h3>
        </div>
        <div id="login-credentials">
            <form action="src/auth/login.php" method="post">
                <input type="text" name="username" placeholder="Username" autocomplete="off" required>
                <input type="password" name="password" placeholder="Password" autocomplete="off" required>
                <input type="submit" name="login" value="Log In">
                <hr>
                <input id="create-account" type="button" value="Create account">
            </form>
        </div>
    </section>
    <div id="modal"> 
        <div class="modal-content">
            <div id="header">
                <h2>Sign Up</h2>
                <button id="exit-account-creation">X</button>
                <p>Just some simple information.</p>
                <hr>
            </div>
            <form action="src/auth/register.php" method="post">
                <input type="text" name="username" placeholder="Username" autocomplete="off" required>
                <input type="password" name="password" placeholder="Password" autocomplete="off" required>
                <input type="text" name="display-name" placeholder="Display Name" autocomplete="off" required>
                <input type="date" name="birthday" required>
                <input type="submit" name="register" value="Sign Up">
            </form>
        </div>
    </div>
    
    <script src="assets/js/auth/login.js"></script>
</body>

</html>
