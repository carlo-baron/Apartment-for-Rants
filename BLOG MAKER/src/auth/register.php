<?php
include("../../includes/config/database.php");

if (isset($_POST["register"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $birthday = $_POST["birthday"];
    $display_name = $_POST["display-name"];

    $check_stmt = mysqli_prepare($connection, "SELECT * FROM login WHERE username = ?");
    mysqli_stmt_bind_param($check_stmt, "s", $username);
    mysqli_stmt_execute($check_stmt);
    $result = mysqli_stmt_get_result($check_stmt);

    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('Already Registered')</script>";
    } else {
        $login_stmt = mysqli_prepare($connection, "INSERT INTO login (username, password) VALUES (?, ?)");
        mysqli_stmt_bind_param($login_stmt, "ss", $username, $hashed_password);
        mysqli_stmt_execute($login_stmt);

        $login_id = mysqli_insert_id($connection);

        $user_stmt = mysqli_prepare($connection, "INSERT INTO users (birthday, display_name, login_id) VALUES (?, ?, ?)");
        mysqli_stmt_bind_param($user_stmt, "ssi", $birthday, $display_name, $login_id);
        mysqli_stmt_execute($user_stmt);

        mysqli_stmt_close($login_stmt);
        mysqli_stmt_close($user_stmt);
        mysqli_stmt_close($check_stmt);

        header("Location: ../../index.php");
        exit;
    }

    mysqli_stmt_close($check_stmt);
}

mysqli_close($connection);
?>
