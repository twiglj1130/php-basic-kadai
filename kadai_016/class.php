<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>クラスを2つ作ってそれぞれのインスタンスを出力しよう</title>
</head>
<!-- http://no1.local/phptest/htdocs\kadai_016\class.php -->

<body>
    <p>
        <?php
    // クラスを定義する
    class Food {
        // プロパティを定義する
        private $name;
        private $price;

        // メソッドを定義する
        public function show_price(string $name) {
            echo $this->price . '<br>';
        }
        
        // コンストラクタを定義する
        public function __construct(string $name, string $price) {
            $this->name = $name;
            $this->price = $price;
        }
    }
    // クラスを定義する
    class Animal {
        // プロパティを定義する
        private $name;
        private $height;
        private $weight;
        
        // メソッドを定義する
        public function show_height(string $name) {
            // $this->weight = $weight;
            echo $this->height . '<br>';
        }

        // コンストラクタを定義する
        public function __construct(string $name, int $height, int $weight) {
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
        }
    }

    // Food インスタンス化する
    $food = new Food('ポテト', 250);
    // Food インスタンス$priceの各プロパティの値を出力する
    print_r($food);
    echo '<br>';
    
    // Animal インスタンス化する
    $animal = new Animal('馬', 200, 5000);
    // Animal インスタンス$priceの各プロパティの値を出力する
    print_r($animal);
    echo '<br>';
    
    // 「Food」クラスには「price」プロパティの値を出力する「show_price」メソッド
    $food->show_price('ポテト');
    // Animal」クラスには「height」 プロパティの値を出力する「show_height」メソッド
    $animal->show_height('馬');
    ?>
    </p>
</body>

</html>