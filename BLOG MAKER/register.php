<?php
    include("database.php");
    if(isset($_POST["register"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $birthday = $_POST["birthday"];
        $display_name = $_POST["display-name"];
        
    
        
        $check_username = "SELECT * FROM login WHERE username = '$username'";
        $result = mysqli_query($connection, $check_username);

        if(mysqli_num_rows($result) > 0){
            echo "<script>alert('Already Registerd')</script>";
        }else{
            $sql = "INSERT INTO login (username, password, birthday, display_name)
            VALUES ('$username', '$hashed_password', '$birthday', '$display_name')";
            mysqli_query($connection,$sql);

            header("Location: index.php");
        }
        
    }

    mysqli_close($connection);
?>