<?php

namespace App\Tournament\Domain\Repositories\Eloquent;

use ZnLib\Db\Base\BaseEloquentCrudRepository;
use App\Tournament\Domain\Entities\TournamentEntity;
use App\Tournament\Domain\Interfaces\Repositories\TournamentRepositoryInterface;

class TournamentRepository extends BaseEloquentCrudRepository implements TournamentRepositoryInterface
{

    public function tableName() : string
    {
        return 'tournament_tournament';
    }

    public function getEntityClass() : string
    {
        return TournamentEntity::class;
    }


}

