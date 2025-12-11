<?php
class Shape
{
  private $ample;
  private $alt;

  public function __construct(float $ample, float $alt)
  {
    $this->ample = $ample;
    $this->alt = $alt;
  }
  public function getAmple(): float
  {
    return $this->ample;
  }
  public function getAlt(): float
  {
    return $this->alt;
  }
}
