<?php
class Rectangle extends Shape
{
  public function calcularArea(): float
  {
    return $this->getAmple() * $this->getAlt();
  }
}
