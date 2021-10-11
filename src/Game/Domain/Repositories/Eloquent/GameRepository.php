<?php

namespace App\Game\Domain\Repositories\Eloquent;

use ZnLib\Db\Base\BaseEloquentCrudRepository;
use App\Game\Domain\Entities\GameEntity;
use App\Game\Domain\Interfaces\Repositories\GameRepositoryInterface;

class GameRepository extends BaseEloquentCrudRepository implements GameRepositoryInterface
{

    public function tableName() : string
    {
        return 'game_game';
    }

    public function getEntityClass() : string
    {
        return GameEntity::class;
    }


}

