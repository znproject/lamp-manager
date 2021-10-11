<?php

namespace App\Tournament\Domain\Services;

use App\Tournament\Domain\Interfaces\Services\SubscriptionServiceInterface;
use ZnCore\Domain\Interfaces\Libs\EntityManagerInterface;
use App\Tournament\Domain\Interfaces\Repositories\SubscriptionRepositoryInterface;
use ZnCore\Domain\Base\BaseCrudService;
use App\Tournament\Domain\Entities\SubscriptionEntity;

/**
 * @method
 * SubscriptionRepositoryInterface getRepository()
 */
class SubscriptionService extends BaseCrudService implements SubscriptionServiceInterface
{

    public function __construct(EntityManagerInterface $em)
    {
        $this->setEntityManager($em);
    }

    public function getEntityClass() : string
    {
        return SubscriptionEntity::class;
    }


}

