<?php

namespace App\Money\Domain\Repositories\Eloquent;

use App\Money\Domain\Interfaces\Repositories\BalanceRepositoryInterface;
use ZnLib\Db\Base\BaseEloquentRepository;

class BalanceRepository extends BaseEloquentRepository implements BalanceRepositoryInterface
{

    public function tableName(): string
    {
        return 'money_balance';
    }

}
