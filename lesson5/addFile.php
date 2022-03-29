<?php
$title = $_POST['title'];
$db = @mysqli_connect("127.0.0.1", "test", "1432", "images") or die('Error!' . mysqli_connect_error());
$result = mysqli_query($db, "SELECT * FROM `gallery`");
if (!empty($_FILES["file"])) {
    $img = addslashes(file_get_contents($_FILES['file']['tmp_name']));
    mysqli_query($db, "INSERT INTO `gallery`(`title`, `image`, `likes`) VALUES ('$title', '$img', 0)");
    header("Location: /index.php");
}
