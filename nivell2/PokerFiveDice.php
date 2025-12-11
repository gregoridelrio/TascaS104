<?php
require_once 'PokerDice.php';

class PokerFiveDice
{
  private array $values;
  private int $rolls = 0;

  public function roll(): void
  {
    $this->values = [];
    for ($i = 0; $i < 5; $i++) {
      $dice = new PokerDice();
      $dice->roll();
      $this->values[] = $dice->getValue();
    }
    $this->rolls++;
  }

  public function getValues(): array
  {
    return $this->values;
  }

  public function getRolls(): int
  {
    return $this->rolls;
  }
}
