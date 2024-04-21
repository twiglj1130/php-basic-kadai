<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
<!-- http://no1.local/phptest/htdocs\kadai_011\foreach.php -->
</head>
<body>
    <?php
    $product_data = [
        '名前' => '玉ねぎ',
        '値段' => 200,
        '産地' => '北海道'
    ];

    foreach ($product_data as $key => $value) {
        echo "{$key}:{$value}<br>";
    }
    ?>
</body>
</html>