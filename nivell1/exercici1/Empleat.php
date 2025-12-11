<?php
class Empleat
{
  private string $nom;
  private string $sou;

  public function __construct(string $nom, int $sou)
  {
    $this->nom = $nom;
    $this->sou = $sou;
  }

  public function pagarImpostos(): void
  {
    if ($this->sou > 6000) {
      echo $this->nom . " has de pagar impostos";
    } else {
      echo $this->nom . " no has de pagar impostos";
    }
  }
}
