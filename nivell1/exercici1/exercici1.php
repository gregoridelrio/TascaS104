<?php
require_once 'Empleat.php';

$empleat = new Empleat("Josep", 1500);
$empleat2 = new Empleat("Maria", 7000);

$empleat->pagarImpostos();
$empleat2->pagarImpostos();
