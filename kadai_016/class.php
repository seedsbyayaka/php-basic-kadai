<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>16章課題</title>
</head>
<body>
    <p>
        <?php

        class Food {

            public $name;
            public $price;

            public function __construct($name, $price) {
                $this->name = $name;
                $this->price = $price;
            }

            public function show_price() {
                echo "価格：{$this->price}円<br>";
            }
        }

        class Animal {

            public $name;
            public $height;
            public $weight;

            public function __construct($name, $height, $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            public function show_height() {
                echo "高さ：{$this->height}cm<br>";
            }
        }

        $food = new Food("りんご", 150);
        $animal = new Animal("ネコ", 30, 4);

        echo "<pre>";
        print_r($food);
        print_r($animal);
        echo "</pre><br>";

        $food->show_price();
        $animal->show_height();

        ?>
    </p>
</body>
</html>
