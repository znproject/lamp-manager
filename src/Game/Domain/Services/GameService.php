<?php

namespace App\Game\Domain\Services;

use App\Game\Domain\Interfaces\Services\GameServiceInterface;
use ZnCore\Domain\Interfaces\Libs\EntityManagerInterface;
use App\Game\Domain\Interfaces\Repositories\GameRepositoryInterface;
use ZnCore\Domain\Base\BaseCrudService;
use App\Game\Domain\Entities\GameEntity;

/**
 * @method GameRepositoryInterface getRepository()
 */
class GameService extends BaseCrudService implements GameServiceInterface
{

    public function __construct(EntityManagerInterface $em)
    {
        $this->setEntityManager($em);
    }

    public function getEntityClass() : string
    {
        return GameEntity::class;
    }


}

