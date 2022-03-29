<?php
include './addFile.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./style.css" />

<body>
    <div class="heading-box">
        <h1>Gallery</h1>
    </div>
    <div class="container">
        <form class="add-image-box" action="/addFile.php" method="post" enctype="multipart/form-data">
            <div class="title-box">
                <p>Image title</p>
                <input type="text" placeholder="title..." name='title' />
            </div>
            <div class="image-insert-box">
                <input type="file" name="file">
                <input class="add-image-button" type="submit" name="upload" value="Add image +">
            </div>
        </form>
        <div class="gallery-box">
            <?php while ($row = mysqli_fetch_assoc($result)) {
                $show_img = base64_encode($row['image']); ?>
                <a href="image.php?id=<?= $row['imageId'] ?>" class="image-box" id=<?= $row['imageId'] ?>>
                    <h2><?= $row['title'] ?></h2>
                    <img width="300px" src="data:image/jpeg;base64, <?= $show_img ?>" alt="image">
                    <p>Likes: <?= $row['likes'] ?></p>
                </a>
            <?php } ?>
        </div>
    </div>
</body>

</html>