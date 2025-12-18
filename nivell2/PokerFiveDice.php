<?php
require_once 'PokerDice.php';

class PokerFiveDice
{
  private array $dice = [];
  private int $rolls = 0;

  public function __construct()
  {
    for ($i = 0; $i < 5; $i++) {
      $dice = new PokerDice();
      $this->dice[] = $dice;
    }
  }

  public function roll(): void
  {
    foreach ($this->dice as $dice) {
      $dice->roll();
    }
    $this->rolls++;
  }

  public function getValues(): array
  {
    return $this->dice;
  }

  public function getRolls(): int
  {
    return $this->rolls;
  }
}
