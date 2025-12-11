<?php
class PokerDice
{
  private string $value;

  public function roll(): void
  {
    $values = ['A', 'K', 'Q', 'J', '7', '8'];
    $this->value = $values[array_rand($values)];
  }
  public function getValue(): string
  {
    return $this->value;
  }
}
