<?php
$db = @mysqli_connect("127.0.0.1", "test", "1432", "images") or die('Error!' . mysqli_connect_error());

$id = $_GET["id"];

$result = mysqli_query($db, "SELECT * FROM `gallery` WHERE imageId = $id");

$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./style.css" />
</head>

<body>
    <div class="image-container">
        <?php
        $show_img = base64_encode($row['image']); ?>
        <div class="image-image-box" id=<?= $row['imageId'] ?>>
            <h2><?= $row['title'] ?></h2>
            <img src="data:image/jpeg;base64, <?= $show_img ?>" alt="image">
            <p>Likes: <?= $row['likes'] ?></p>
        </div>
        <a class="go-back-button" href="index.php">
            <- Go back</a>
    </div>
</body>

</html>