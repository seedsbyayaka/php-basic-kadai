<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>
<body>
    <p>
        <?php

        // 独自のソート関数
        function sort_2way($array, $order)
        {
            // 昇順（TRUE）
            if ($order === TRUE) {
                sort($array);  // 昇順ソート
                echo "【昇順ソート】<br>";
            } else {
                // 降順（FALSE）
                rsort($array); // 降順ソート
                echo "【降順ソート】<br>";
            }

            // 表示（1 行ずつ）
            foreach ($array as $num) {
                echo $num . "<br>";
            }

            echo "<br>"; // 区切り用
        }

        // ソートする配列
        $nums = [15, 4, 18, 23, 10];

        // 昇順ソート
        sort_2way($nums, TRUE);

        // 降順ソート
        sort_2way($nums, FALSE);

        ?>
    </p>
</body>
</html>
