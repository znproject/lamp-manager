<?php

namespace App\Game\Domain\Services;

use App\Game\Domain\Interfaces\Services\PartnerServiceInterface;
use ZnCore\Domain\Interfaces\Libs\EntityManagerInterface;
use App\Game\Domain\Interfaces\Repositories\PartnerRepositoryInterface;
use ZnCore\Domain\Base\BaseCrudService;
use App\Game\Domain\Entities\PartnerEntity;

/**
 * @method PartnerRepositoryInterface getRepository()
 */
class PartnerService extends BaseCrudService implements PartnerServiceInterface
{

    public function __construct(EntityManagerInterface $em)
    {
        $this->setEntityManager($em);
    }

    public function getEntityClass() : string
    {
        return PartnerEntity::class;
    }


}

