<?php
    include("../../includes/config/database.php");
    session_start();

    if (isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $stmt = $connection->prepare("SELECT * FROM login WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $verify_password = password_verify($password, $row['password']);

            if ($verify_password) {
                $loginId = $row["id"];

                $stmt = $connection->prepare("SELECT user_id FROM users WHERE login_id = ?");
                $stmt->bind_param("i", $loginId);
                $stmt->execute();
                $result = $stmt->get_result();

                if($result->num_rows > 0){
                    $row = $result->fetch_assoc();
                    $_SESSION["id"] = $row["user_id"];
                    session_regenerate_id(true);
                }
                header("Location: ../../src/pages/main.php");
                exit();
            } else {
                header("Location: ../../index.php");
                exit();
            }
        }else{
            header("Location: ../../index.php");
            exit;
        }
    }

    $connection->close();
?>
