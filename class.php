<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>kadai_016</title>
</head>
<body>
  <p>
    <?php

    class Food {
      private $name;
      private $price;

      public function __construct(string $name, int $price){
        $this->name = $name;
        $this->price = $price;
      }

      public function show_price(int $price){
        echo $this->price = 150 .'<br>' ;
      }
    }

    $Food = new Food('bread', 150);

    print_r($Food);
    echo '<br>';
  
    class Animal {
      private $name;
      private $height;
      private $weight;

      public function __construct(string $name, int $height, int $weight){
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }

      public function show_height(int $height){
        echo $this->height = 90 .'<br>';
      }
    }

    $Animal = new Animal('cat', 90, 3000);

    print_r($Animal);
    echo '<br>';

    
    $Food->show_price(150);
    $Animal->show_height(90);
    ?>
 </p>




  
</body>
</html>