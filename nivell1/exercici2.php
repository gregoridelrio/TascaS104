<?php
class Shape {
  private $ample;
  private $alt;

  public function __construct($ample, $alt) {
    $this->ample = $ample;
    $this->alt = $alt;
  }
  public function getAmple() {
    return $this->ample;
  }
  public function getAlt() {
    return $this->alt;
  }
}

class Triangle extends Shape {
  public function __construct($ample, $alt) {
    parent::__construct($ample, $alt);
  }
  public function area() {
    return ($this->getAmple() * $this->getAlt()) / 2;
  }
}

class Rectangle extends Shape {
  public function __construct($ample, $alt) {
    parent::__construct($ample, $alt);
  }
  public function area() {
    return $this->getAmple() * $this->getAlt();
  }
}
