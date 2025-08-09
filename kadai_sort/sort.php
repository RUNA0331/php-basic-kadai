<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ↓sort_2way(ソート関数の部分)
        function sort_2way(array $array, bool $order) {
            if ($order === true) {
                // ↓trueの時に昇順
                sort($array);
            } else {
                // ↓falseの時降順
                rsort($array);
            }

            foreach ($array as $value) {
                echo $value . '<br>';
            }
        }

        $nums = [15, 4, 18, 23, 10];

        // ソート関数をtrueとfalseを呼び出す
        echo "昇順にソートします。<br>";
        sort_2way($nums, true);

        echo "降順にソートします。<br>";
        sort_2way($nums, false);
        ?>
    </p>
</body>

</html>