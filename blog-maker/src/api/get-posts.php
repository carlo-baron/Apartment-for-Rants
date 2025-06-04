<?php
    include("../../includes/config/database.php");

    header("Content-Type: Application/json");
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        $sql = "SELECT post_id, title, content FROM posts";
        $result = mysqli_query($connection, $sql);

        if(mysqli_num_rows($result) > 0){
            $posts = [];
            while($row = mysqli_fetch_assoc($result)){
                $posts[] = $row;
            }
            echo json_encode($posts);
        }
    }
?>
