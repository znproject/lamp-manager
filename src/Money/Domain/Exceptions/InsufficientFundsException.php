<?php

namespace App\Money\Domain\Exceptions;

class InsufficientFundsException extends \Exception
{

    private $notEnoughAmount = 0;

    public function getNotEnoughAmount(): float
    {
        return $this->notEnoughAmount;
    }

    public function setNotEnoughAmount(float $notEnoughAmount): void
    {
        $this->notEnoughAmount = $notEnoughAmount;
    }
}