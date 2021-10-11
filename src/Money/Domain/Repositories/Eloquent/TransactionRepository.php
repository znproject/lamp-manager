<?php

namespace App\Money\Domain\Repositories\Eloquent;

use ZnCore\Domain\Libs\Query;
use ZnLib\Db\Base\BaseEloquentCrudRepository;
use App\Money\Domain\Entities\TransactionEntity;
use App\Money\Domain\Interfaces\Repositories\TransactionRepositoryInterface;

class TransactionRepository extends BaseEloquentCrudRepository implements TransactionRepositoryInterface
{

    public function tableName() : string
    {
        return 'money_transaction';
    }

    public function getEntityClass() : string
    {
        return TransactionEntity::class;
    }

    /*public function calculateAmountByWalletId(int $walletId, Query $query = null): float
    {
        $query = $this->forgeQuery($query);
        $query->where('sender_id', $walletId);
        $queryBuilder = $this->getQueryBuilder();
        $this->forgeQueryBuilder($queryBuilder, $query);
        $queryBuilder->selectRaw('sum(amount) as "amount"');
        return floatval($queryBuilder->get()->first()->amount);
    }*/

    public function calculateDebtByWalletId(int $walletId, Query $query = null): float
    {
        $query = $this->forgeQuery($query);
        $query->where('recipient_id', $walletId);
        $queryBuilder = $this->getQueryBuilder();
        $this->forgeQueryBuilder($queryBuilder, $query);
        $queryBuilder->selectRaw('sum(amount) as "amount"');
        return floatval($queryBuilder->get()->first()->amount);
    }

    public function calculateCreditByWalletId(int $walletId, Query $query = null): float
    {
        $query = $this->forgeQuery($query);
        $query->where('sender_id', $walletId);
        $queryBuilder = $this->getQueryBuilder();
        $this->forgeQueryBuilder($queryBuilder, $query);
        $queryBuilder->selectRaw('sum(amount) as "amount"');
        return floatval($queryBuilder->get()->first()->amount);
    }
}

