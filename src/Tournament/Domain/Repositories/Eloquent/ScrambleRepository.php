<?php

namespace App\Tournament\Domain\Repositories\Eloquent;

use ZnLib\Db\Base\BaseEloquentCrudRepository;
use App\Tournament\Domain\Entities\ScrambleEntity;
use App\Tournament\Domain\Interfaces\Repositories\ScrambleRepositoryInterface;

class ScrambleRepository extends BaseEloquentCrudRepository implements ScrambleRepositoryInterface
{

    public function tableName() : string
    {
        return 'tournament_scramble';
    }

    public function getEntityClass() : string
    {
        return ScrambleEntity::class;
    }


}

