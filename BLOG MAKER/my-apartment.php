<?php
    include("session-check.php");
    include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Apartments</title>
    <link rel="stylesheet" href="my-apartment.css">
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
    <h2>My Apartments</h2>
</body>
</html>
<?php
    //echo display name and birthdate
    $registered_info = "SELECT * FROM users WHERE user_id = '" . $_SESSION['id'] . "'";
    $result = mysqli_query($connection, $registered_info);
    $registered_id = mysqli_fetch_assoc($result);

    echo $registered_id["display_name"] . "<br>";
    echo $registered_id["birthday"] . "<br>";

    // i guess ill have to use join to easily get the values, but ill do it later
    // echo $registered_id["reg_date"] . "<br>";
?>
