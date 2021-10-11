<?php

namespace App\Game\Domain\Repositories\Eloquent;

use ZnLib\Db\Base\BaseEloquentCrudRepository;
use App\Game\Domain\Entities\PartnerEntity;
use App\Game\Domain\Interfaces\Repositories\PartnerRepositoryInterface;

class PartnerRepository extends BaseEloquentCrudRepository implements PartnerRepositoryInterface
{

    public function tableName() : string
    {
        return 'game_partner';
    }

    public function getEntityClass() : string
    {
        return PartnerEntity::class;
    }


}

