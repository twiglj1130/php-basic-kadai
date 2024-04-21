<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>
<!-- http://no1.local/phptest/htdocs\kadai_sort\sort.php -->
<body>
    <p>
        <?php
        $nums = [15, 4, 18, 23, 10];
        function sort_2way($array, $order = true) {
            // 昇順または降順でソートする
            if ($order) {
                asort($array); // 昇順でソート
            } else {
                arsort($array); // 降順でソート
            }

            foreach ($array as $value) {
                echo $value . "<br>";
            }
        }

        echo "昇順にソートします。<br>";
        sort_2way($nums, true);

        
        echo "降順にソートします。<br>";
        sort_2way($nums, false);
        ?>
    </p>
</body>

</html>