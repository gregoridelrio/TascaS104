<?php
class Triangle extends Shape
{
  public function calcularArea(): float
  {
    return ($this->getAmple() * $this->getAlt()) / 2;
  }
}
