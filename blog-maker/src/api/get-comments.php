<?php
    include("../../includes/config/database.php");
    header("Content-Type: Application/json");
    $id = $_GET['id'];

    $sql = "SELECT * FROM comments WHERE post_id = '$id'";
    $result = mysqli_query($connection, $sql);
    if($result && mysqli_num_rows($result) > 0){
        $comments = [];
        while($row = mysqli_fetch_assoc($result)){
            $comments[] = $row;
        }
        echo json_encode($comments);
        mysqli_close($connection);
    }
?>
