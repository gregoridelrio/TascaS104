<?php
require_once "Cinema.php";
class Cinemes
{
  private array $cinemes = [];

  public function afegirCine(Cinema $cinema): void
  {
    $this->cinemes[] = $cinema;
  }

  public function buscarDirector(string $nomDirector): void
  {
    $nomPeliTrobada = [];
    foreach ($this->cinemes as $cinema) {
      foreach ($cinema->getPelicules() as $pelicula) {
        if ($pelicula->getDirector() == $nomDirector && !in_array($pelicula->getNom(), $nomPeliTrobada)) {
          echo $pelicula;
          $nomPeliTrobada[] = $pelicula->getNom();
        }
      }
    }
  }
}
