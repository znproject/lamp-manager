<?php

namespace App\Game\Domain\Services;

use App\Game\Domain\Interfaces\Services\CategoryServiceInterface;
use ZnCore\Domain\Interfaces\Libs\EntityManagerInterface;
use App\Game\Domain\Interfaces\Repositories\CategoryRepositoryInterface;
use ZnCore\Domain\Base\BaseCrudService;
use App\Game\Domain\Entities\CategoryEntity;

/**
 * @method CategoryRepositoryInterface getRepository()
 */
class CategoryService extends BaseCrudService implements CategoryServiceInterface
{

    public function __construct(EntityManagerInterface $em)
    {
        $this->setEntityManager($em);
    }

    public function getEntityClass() : string
    {
        return CategoryEntity::class;
    }


}

