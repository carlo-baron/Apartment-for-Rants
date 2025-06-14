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
        $title = $_POST['title'];
        $content = $_POST['content']; 
        $id = $_SESSION["id"];
        MakePost($connection, $title, $content, $id);
    }

    function MakePost($connection, $title, $content, $id){
        $stmt = $connection->prepare("INSERT INTO posts (title, content, user_id) VALUES(?, ?, ?)"); 
        $stmt->bind_param("ssi", $title, $content, $id);
        $stmt->execute();
        $stmt->close();
        header("Location: main.php");
        exit();
    }
?>
