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

$cinema1 = new Cinema("Cinema Girona", "Girona");
$cinema2 = new Cinema("Cinema Barcelona", "Barcelona");

$pelicula1 = new Pelicula("Rocky", 120, "Avildsen");
$pelicula2 = new Pelicula("El Padrino", 200, "Coppola");
$pelicula3 = new Pelicula("El Padrino 2", 205, "Coppola");
$pelicula4 = new Pelicula("Oppenheimer", 210, "Nolan");
$pelicula5 = new Pelicula("Zootropolis", 100, "Moore");

$cinema1->afegirPelicula($pelicula1);
$cinema1->afegirPelicula($pelicula2);
$cinema1->afegirPelicula($pelicula3);
$cinema1->afegirPelicula($pelicula4);

$cinema2->afegirPelicula($pelicula2);
$cinema2->afegirPelicula($pelicula3);
$cinema2->afegirPelicula($pelicula4);
$cinema2->afegirPelicula($pelicula5);

$cinema1->buscarDirector("Coppola", [$cinema1, $cinema2]);

//$cinema1->mostrarPelicules();

//$cinema1->mostrarPeliculaMesLlarga();
