<?php
    include("../../includes/session-check.php");
    include("../../includes/config/database.php");
    header("Content-Type: application/json");
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        $sql = "SELECT display_name, birthday, location, reg_date FROM users WHERE login_id = '" . $_SESSION['id'] . "'";
        $result = mysqli_query($connection, $sql);
        if(mysqli_num_rows($result) > 0){
           $info = []; 
           while($row = mysqli_fetch_assoc($result)){
                $info[] = $row;
           }
           echo json_encode($info);
        }
    }
?>
