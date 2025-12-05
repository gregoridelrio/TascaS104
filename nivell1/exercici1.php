<?php
  class Empleat {
    private $nom;
    private $sou;

    public function __construct($nom, $sou) {
      $this->nom = $nom;
      $this->sou = $sou;
    }

    public function pagarImpostos() {
      if($this->sou > 6000) {
        echo $this->nom . " has de pagar impostos";
      } else {
        echo $this->nom . " no has de pagar impostos";
      }
    }
  }