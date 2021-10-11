<?php

namespace App\Game\Domain\Repositories\Eloquent;

use ZnLib\Db\Base\BaseEloquentCrudRepository;
use App\Game\Domain\Entities\CategoryEntity;
use App\Game\Domain\Interfaces\Repositories\CategoryRepositoryInterface;

class CategoryRepository extends BaseEloquentCrudRepository implements CategoryRepositoryInterface
{

    public function tableName() : string
    {
        return 'game_category';
    }

    public function getEntityClass() : string
    {
        return CategoryEntity::class;
    }


}

