<?php

class Triangle {

  public $sideA;
  public $sideB;
  public $sideC;

  function __construct($sideA, $sideB, $sideC)
  {
      $this->sideA = $sideA;
      $this->sideB = $sideB;
      $this->sideC = $sideC;
  }

  function triangleCheck() {

    if ((($this->sideA + $this->sideB) <= $this->sideC) || (($this->sideA + $this->sideC) <= $this->sideB) || (($this->sideC + $this->sideB) <= $this->sideA)) {
        echo "Not a triangle. Any one side can NOT be greater than or equal to the sum of the other two sides.";
    }   elseif (($this->sideA == $this->sideB) && ($this->sideA == $this->sideC)) {
        echo "It's an equilateral triangle!";
    }   elseif ((($this->sideA == $this->sideB) && ($this->sideA != $this->sideC)) || (($this->sideB ==   $this->sideC) && ($this->sideB != $this->sideA)) || (($this->sideA == $this->sideC) && ($this->sideA != $this->sideB))) {
        echo "It's an isoceles triangle!";
    }
       elseif (!(($this->sideA == $this->sideB) == $this->sideC)) {
        echo "It's a scalene triangle!";
    }
  }

  function getSideA() {
    return $this->sideA;
  }

  function getSideB() {
    return $this->sideB;
  }

  function getSideC() {
    return $this->sideC;
  }

}

$myTriangle = new Triangle($_GET["sideA"], $_GET["sideB"], $_GET["sideC"]);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Is it a Triangle?</title>
</head>
<body>
  <h1>Here are some delicious triangles</h1>
  <ul>
    <?php

      $sideA =  $myTriangle->getSideA();
      $sideB =  $myTriangle->getSideB();
      $sideC =  $myTriangle->getSideC();
      echo "Side A:";
      echo "<li> $sideA </li>";
      echo "Side B:";
      echo "<li> $sideB </li>";
      echo "Side C:";
      echo "<li> $sideC </li>";
      echo "<li>Type:</li>";
      $type = $myTriangle->triangleCheck();


     ?>
  </ul>
</body>
</html>
