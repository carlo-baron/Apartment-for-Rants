<?php
    session_start();
    if(isset($_SESSION["id"])){
        if ($_SERVER['PHP_SELF'] === '/BLOG MAKER/index.php' ){
            header("Location: src/pages/main.php");
        }
    }else{
        if ($_SERVER['PHP_SELF'] !== '/BLOG MAKER/index.php' ){
            header("Location: ../index.php");
        }
    }
?>
