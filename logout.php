<?php
    if(isset($_GET["logout"])){
        setcookie("login", time() - 3600, '/');
        setcookie("userId", time() - 3600);
        header("Location: /");
        die();
    }
?>