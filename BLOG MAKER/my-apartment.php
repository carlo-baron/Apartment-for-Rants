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
</head>
<body>
    <h1>My Apartments</h1>
</body>
</html>
<?php
    //echo display name and birthdate
    $registered_info = "SELECT * FROM login WHERE id = '" . $_SESSION['id'] . "'";
    $result = mysqli_query($connection, $registered_info);
    $registered_id = mysqli_fetch_assoc($result);
?>
