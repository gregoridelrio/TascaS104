<?php
require_once "Pelicula.php";
class Cinema
{
  private string $nom;
  private string $poblacio;
  private array $pelicules = [];

  public function __construct(string $nom, string $poblacio)
  {
    $this->nom = $nom;
    $this->poblacio = $poblacio;
  }

  public function afegirPelicula(Pelicula $pelicula): void
  {
    $this->pelicules[] = $pelicula;
  }

  public function mostrarPelicules(): void
  {
    foreach ($this->pelicules as $pelicula) {
      echo $pelicula->getNom();
      echo $pelicula->getDuracio();
      echo $pelicula->getDirector();
    }
  }

  public function mostrarPeliculaMesLlarga(): void
  {
    $peliculaMesLLarga = $this->pelicules[0];
    foreach ($this->pelicules as $pelicula) {
      if ($pelicula->getDuracio() > $peliculaMesLLarga->getDuracio()) {
        $peliculaMesLLarga = $pelicula;
      }
    }
    echo $peliculaMesLLarga;
  }

  public function buscarDirector(string $nomDirector, array $cinemas): void
  {
    $nomPeliTrobada = [];
    foreach ($cinemas as $cinema) {
      foreach ($cinema->pelicules as $pelicula) {
        if ($pelicula->getDirector() == $nomDirector && !in_array($pelicula->getNom(), $nomPeliTrobada)) {
          echo $pelicula;
          $nomPeliTrobada[] = $pelicula->getNom();
        }
      }
    }
  }
}
