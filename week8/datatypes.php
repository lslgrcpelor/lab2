<!DOCTYPE html>
<html>
<body>

<?php
class Dress {
  public $color;
  public $brand;
  public function __construct($color, $brand) {
    $this->color = $color;
    $this->brand = $brand;
  }
  public function message() {
    return "My dress is a " . $this->color . " " . $this->brand . "!";
  }
}

$myDress = new Dress("red", "Gushie");
echo $myDress -> message();
echo "<br>";
$myDress = new Dress("black", "Shenel");
echo $myDress -> message();
echo "<br>";
$myDress = new Dress("brown", "LoweVutones");
echo $myDress -> message();
?>

</body>