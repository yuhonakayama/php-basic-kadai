<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>kadai_016</title>
</head>

<body>
  <p>
    <?php
    class Food {
        private $name;
        private $price;

        public function show_price() {
            echo $this->price . '<br>';
        }

        public function __construct(string $name, int $price) {
            $this->name = $name;
            $this->price = $price;
        }
    }

    class Animal {
        private $name;
        private $height;
        private $weight;

        public function show_height() {
            echo $this->height . '<br>';
        }

        public function __construct(string $name, int $height, int $weight) {
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
        } 
    }

    $chocolate = new Food('チョコレート', 300);

    $cat = new Animal('ネコ', 30 , 5);

    print_r($chocolate);

    Print_r($cat);

    $chocolate->show_price();

    $cat->show_height();

    ?>
  </p>
</body>
</html>