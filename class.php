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

      public function show_price(){
        echo $this->price ;
      }
    }

    $food = new Food('bread', 150);

    print_r($food);
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

      public function show_height(){
        echo $this->height ;
      }
    }

    $cat = new Animal('cat', 90, 3000);

    print_r($cat);
    echo '<br>';

    
    $food->show_price();
    echo '<br>';
    $cat->show_height();
    ?>
 </p>




  
</body>
</html>