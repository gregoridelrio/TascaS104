<?php
require_once "PokerDice.php";
require_once "PokerFiveDice.php";

$diceSingle = new PokerDice();
$diceSingle->roll();
echo $diceSingle->getValue() . "\n";

$dicesMultiple = new PokerFiveDice();
$dicesMultiple->roll();
$dicesMultiple->roll();
$dicesMultiple->roll();
echo "Nombre de tirades: " . $dicesMultiple->getRolls() . "\n";

$dicesResult = $dicesMultiple->getValues();
foreach ($dicesResult as $dice) {
  echo $dice . " ";
}
