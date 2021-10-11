<?php

namespace App\Money\Domain\Interfaces\Services;

use App\Money\Domain\Entities\WalletEntity;
use ZnCore\Domain\Interfaces\Service\CrudServiceInterface;

interface WalletServiceInterface extends CrudServiceInterface
{

    public function oneMyByCurrencyId(int $currencyId) : WalletEntity;
}

