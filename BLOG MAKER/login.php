<?php
    include("database.php");
    session_start();

    $username = $_POST["username"];
    $password = $_POST["password"];

    if(isset($_POST["login"])){
        $sql_get_username = "SELECT * FROM login WHERE username = '$username'";
        $result = mysqli_query($connection, $sql_get_username);

        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $verify_password = password_verify($password, $row['password']);
            if($verify_password){
                header("Location: main.php");
                $_SESSION["id"] = $row["id"];
            }else{
                //send error for front end
                header("Location: login.php");
            }
        }
    }
    mysqli_close($connection);
?>