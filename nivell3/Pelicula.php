<?php
class Pelicula
{
  private string $nom;
  private int $duracio;
  private string $director;

  public function __construct(string $nom, int $duracio, string $director)
  {
    $this->nom = $nom;
    $this->duracio = $duracio;
    $this->director = $director;
  }

  public function getNom(): string
  {
    return $this->nom;
  }

  public function getDuracio(): int
  {
    return $this->duracio;
  }

  public function getDirector(): string
  {
    return $this->director;
  }

  public function __toString(): string
  {
    return $this->nom . ", " . $this->duracio . ", " . $this->director;
  }
}
