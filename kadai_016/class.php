<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>

<body>
  <p>
    <?php
    class Food {
      private $name;
      private $price;

      public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
      }

      public function show_price(){
        return $this->price;
      }
    }

    $food = new Food('potato',250);
    echo $food . '<br>';
    ?>
  </p>
  
  <p>
    <?php
    class Animal {
      private $name;
      private $height;
      private $weight;

      public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight =$weight;
      }

      public function show_height(){
        return $this->height;
      }
    }

    $animal = new Animal('dog',60,5000);
    echo $animal;
    ?>
  </p>


</body>
</html>