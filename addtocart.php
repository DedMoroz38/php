<?php
if(isset($_GET["addtocart"])){
    if(isset($_COOKIE["login"])){
        $userId = $_COOKIE["userId"];
        $itemId = $_GET["itemId"];
        mysqli_query($db, "INSERT INTO `cart` (userId, itemId) VALUES ($userId, $itemId)");
        header("Location: catalog.php");
        die();
    } else {
        header("Location: login.php");
        die();
    }
}
?>