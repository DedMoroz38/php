<?php
$menu = [
    'CATEGORY' => ['Bags' => 'shop/bags', 'Denim' => 'shop/denim', 'T-Shirts' => 'shop/t-shirts'],
    'BRAND' => ['Adidas' => 'brand/adidas', 'Nike' => 'brand/nike'],
    'PRICE' => ['Before $50' => 'price/before50', 'Bigger $50' => 'price/bigger50']
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul style="list-style-type: none;">
        <?php foreach ($menu as $name => $property) {  ?>
            <li>
                <details>
                    <summary><?= $name ?></summary>
                    <?php foreach ($property as $property_name => $item) { ?>
                        <a href="<?= $item ?>"><?= $property_name ?></a><br>
                    <?php } ?>
                </details>
            </li>
        <?php }  ?>
    </ul>
</body>

</html>