<?php
class PokerDice
{
  private string $value;

  public function roll()
  {
    $values = ['A', 'K', 'Q', 'J', '7', '8'];
    $this->value = $values[array_rand($values)];
  }
  public function getValue()
  {
    return $this->value;
  }
}

$dice = new PokerDice();
$dice->roll();
echo "Valor del dau: " . $dice->getValue() . "\n";
