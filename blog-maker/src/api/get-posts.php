<?php
    include("../../includes/config/database.php");
//  currently get all post made
    header("Content-Type: Application/json");
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        $sql = "SELECT display_name, post_id, title, content, created_at
            FROM users INNER JOIN posts
            ON users.user_id = posts.user_id";
        $result = mysqli_query($connection, $sql);

        if(mysqli_num_rows($result) > 0){
            $posts = [];
            while($row = mysqli_fetch_assoc($result)){
                $posts[] = $row;
            }
            echo json_encode($posts);
            mysqli_close($connection);
        }
    }
?>
