<?php

namespace App\Money\Domain\Repositories\Eloquent;

use ZnSandbox\Sandbox\Application\Domain\Interfaces\Repositories\ApplicationRepositoryInterface;
use ZnCore\Domain\Interfaces\Entity\EntityIdInterface;
use ZnCore\Domain\Libs\Query;
use ZnCore\Domain\Relations\relations\OneToOneRelation;
use ZnLib\Db\Base\BaseEloquentCrudRepository;
use App\Money\Domain\Entities\WalletEntity;
use App\Money\Domain\Interfaces\Repositories\WalletRepositoryInterface;
use ZnSandbox\Sandbox\Geo\Domain\Interfaces\Repositories\CurrencyRepositoryInterface;

class WalletRepository extends BaseEloquentCrudRepository implements WalletRepositoryInterface
{

    public function tableName() : string
    {
        return 'money_wallet';
    }

    public function getEntityClass() : string
    {
        return WalletEntity::class;
    }

    public function oneUnique($identityId, $currencyId): WalletEntity
    {
        $query = $this->forgeQuery();
        $query->where('identity_id', $identityId);
        $query->where('currency_id', $currencyId);
        return $this->one($query);
    }

    public function relations2()
    {
        return [
            [
                'class' => OneToOneRelation::class,
                'relationAttribute' => 'currency_id',
                'relationEntityAttribute' => 'currency',
                'foreignRepositoryClass' => CurrencyRepositoryInterface::class,
            ],
        ];
    }
}
