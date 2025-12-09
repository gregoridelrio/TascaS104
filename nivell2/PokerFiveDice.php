<?php
require_once 'PokerDice.php';
class PokerFiveDice
{
  private array $values;
  private int $rolls = 0;

  public function roll()
  {
    $this->values = [];
    for ($i = 0; $i < 5; $i++) {
      $dice = new PokerDice();
      $dice->roll();
      $this->values[] = $dice->getValue();
    }
    $this->rolls++;
  }

  public function getValues()
  {
    return $this->values;
  }

  public function getRolls()
  {
    return $this->rolls;
  }
}

$fiveDice = new PokerFiveDice();
$fiveDice->roll();
$fiveDice->roll();
$fiveDice->roll();
$fiveDice->roll();
echo "Valors dels cinc daus: " . implode(', ', $fiveDice->getValues()) . "\n";
echo "Nombre de tirades: " . $fiveDice->getRolls();
