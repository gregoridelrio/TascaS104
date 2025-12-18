<?php
require_once "Cinemes.php";

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

echo $cinema1->mostrarPelicules() . "<br>";

echo $cinema1->mostrarPeliculaMesLlarga() . "<br>";

$cinemes = new Cinemes();
$cinemes->afegirCine($cinema1);
$cinemes->afegirCine($cinema2);

echo $cinemes->buscarDirector("Coppola");
