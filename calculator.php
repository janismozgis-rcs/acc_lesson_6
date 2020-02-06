<?php

class Calculator
{
    private $number1;
    private $number2;
    private $result;

    public function __construct(int $num1, int $num2)
    {
        $this->number1 = $num1;
        $this->number2 = $num2;
    }

    public function add(): void
    {
        $this->result = $this->number1 + $this->number2;
    }
    public function subtract(): void
    {
        $this->result = $this->number1 - $this->number2;
    }
    public function divide(): void
    {
        $this->result = $this->number1 / $this->number2;
    }
    public function multiply(): void
    {
        $this->result = $this->number1 * $this->number2;
    }

    public function getResult(): int
    {
        return $this->result;
    }
}


$calc = new Calculator(4, 7);
$calc->add();
echo $calc->getResult() . '<br>';
$calc->subtract();
echo $calc->getResult() . '<br>';
$calc->multiply();
echo $calc->getResult() . '<br>';
$calc->divide();
echo $calc->getResult() . '<br>';