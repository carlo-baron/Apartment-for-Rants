<?php
    include("../../includes/config/database.php");
    session_start();

    if (isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql_get_username = "SELECT * FROM login WHERE username = '$username'";
        $result = mysqli_query($connection, $sql_get_username);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $verify_password = password_verify($password, $row['password']);

            if ($verify_password) {
                $loginId = $row["id"];
                $sql = "SELECT user_id FROM users WHERE login_id = '$loginId'";
                $userResult = mysqli_query($connection, $sql);
                if(mysqli_num_rows($userResult) > 0){
                    $row = mysqli_fetch_assoc($userResult);
                    $_SESSION["id"] = $row["user_id"];
                }
                header("Location: ../../src/pages/main.php");
                exit();
            } else {
                echo "incorrect password";
                header("Location: ../../index.php");
                exit();
            }
        }else{
            header("Location: ../../index.php");
            exit;
        }
    }

    mysqli_close($connection);
?>
