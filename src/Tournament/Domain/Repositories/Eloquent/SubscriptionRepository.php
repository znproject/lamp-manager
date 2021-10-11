<?php

namespace App\Tournament\Domain\Repositories\Eloquent;

use ZnLib\Db\Base\BaseEloquentCrudRepository;
use App\Tournament\Domain\Entities\SubscriptionEntity;
use App\Tournament\Domain\Interfaces\Repositories\SubscriptionRepositoryInterface;

class SubscriptionRepository extends BaseEloquentCrudRepository implements SubscriptionRepositoryInterface
{

    public function tableName() : string
    {
        return 'tournament_subscription';
    }

    public function getEntityClass() : string
    {
        return SubscriptionEntity::class;
    }


}

