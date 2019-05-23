<!DOCTYPE html>
<html>
  <head>
    <title>Diving into php</title>
  </head>
  <body>
    <?php
      class Fruit {
        public $weight = 0;

        public function __construct($gewicht){
          $this->weight = $gewicht;
        }

        public function getWeight(){
          return 'This fruit weighs ' . $this->weight . 'grams.';
        }
      }

      $fruit = new Fruit(250);
      echo($fruit->getWeight());
    ?>
  </body>
</html>
