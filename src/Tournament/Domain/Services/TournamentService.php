<?php

namespace App\Tournament\Domain\Services;

use App\Tournament\Domain\Interfaces\Services\TournamentServiceInterface;
use ZnCore\Domain\Interfaces\Libs\EntityManagerInterface;
use App\Tournament\Domain\Interfaces\Repositories\TournamentRepositoryInterface;
use ZnCore\Domain\Base\BaseCrudService;
use App\Tournament\Domain\Entities\TournamentEntity;

/**
 * @method
 * TournamentRepositoryInterface getRepository()
 */
class TournamentService extends BaseCrudService implements TournamentServiceInterface
{

    public function __construct(EntityManagerInterface $em)
    {
        $this->setEntityManager($em);
    }

    public function getEntityClass() : string
    {
        return TournamentEntity::class;
    }


}

