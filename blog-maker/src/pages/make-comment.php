<?php
    include("../../includes/session-check.php");
    include("../../includes/config/database.php");
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $comment = $_POST['comment']; 
        $id = $_SESSION['id'];
        $postId = $_POST['post_id']; 
        $sql = "INSERT INTO comments (content, user_id, post_id) VALUES ('$comment', '$id', '$postId')"; 
        mysqli_query($connection, $sql);
        mysqli_close($connection);
    }
?>
