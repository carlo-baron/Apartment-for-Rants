<?php
    include("../../includes/session-check.php");
    include("../../includes/config/database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Creat Post</title>
</head>
<body>
    <form action="create-post.php", method="post">
        <label for="title">Title: </label>
        <input type="text" name="title" required>
        <label for="content">Content: </label>
        <input type="text" name="content" required>

        <input type="submit" name="submit" value="Create">
    </form>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_SPECIAL_CHARS);
        $content = filter_input(INPUT_POST, "content", FILTER_SANITIZE_SPECIAL_CHARS);
        $id = $_SESSION["id"];
        $sql = "INSERT INTO posts (title, content, user_id) VALUES ('$title', '$content', '$id')";
        mysqli_query($connection, $sql);
        mysqli_close($connection);
        header("Location: main.php");
        exit;
    }
?>
