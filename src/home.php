<!DOCTYPE html>
<html>
  <head>
    <title>Diving into php</title>
  </head>
  <body>
    <?php
      $arr = ["dit", "is", "een", "array"];
      $assArr = ["naam" => "Marijn", "opleiding" => "becode"];
      class Voorstelling {
        //properties
        public $naam;
        public $leeftijd;
        public $woonplaats;

        //constructor
        public function __construct($name, $age, $residence) {
          $this->naam = $name;
          $this->leeftijd = $age;
          $this->woonplaats = $residence;
        }

        //printfunctie
        public function printerke() {
          return "Mijn naam is " . $this->naam . " (" . $this->leeftijd . " jaar) en ik woon in " . $this->woonplaats . ".";
        }
      }

      $ikke = new Voorstelling("Marijn", 26, "Bambrugge");
      var_dump($ikke);
      echo ($ikke->printerke());
    ?>
  </body>
</html>
