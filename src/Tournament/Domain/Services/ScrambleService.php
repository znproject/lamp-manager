<?php

namespace App\Tournament\Domain\Services;

use App\Tournament\Domain\Interfaces\Services\ScrambleServiceInterface;
use ZnCore\Domain\Interfaces\Libs\EntityManagerInterface;
use App\Tournament\Domain\Interfaces\Repositories\ScrambleRepositoryInterface;
use ZnCore\Domain\Base\BaseCrudService;
use App\Tournament\Domain\Entities\ScrambleEntity;

/**
 * @method ScrambleRepositoryInterface getRepository()
 */
class ScrambleService extends BaseCrudService implements ScrambleServiceInterface
{

    public function __construct(EntityManagerInterface $em)
    {
        $this->setEntityManager($em);
    }

    public function getEntityClass() : string
    {
        return ScrambleEntity::class;
    }


}

