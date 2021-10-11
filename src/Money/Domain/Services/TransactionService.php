<?php

namespace App\Money\Domain\Services;

use ZnCore\Domain\Behaviors\ReadOnlyBehavior;
use App\Money\Domain\Interfaces\Services\TransactionServiceInterface;
use ZnCore\Domain\Interfaces\Libs\EntityManagerInterface;
use App\Money\Domain\Interfaces\Repositories\TransactionRepositoryInterface;
use ZnCore\Domain\Base\BaseCrudService;
use App\Money\Domain\Entities\TransactionEntity;

/**
 * @method TransactionRepositoryInterface getRepository()
 */
class TransactionService extends BaseCrudService implements TransactionServiceInterface
{

    public function __construct(EntityManagerInterface $em)
    {
        $this->setEntityManager($em);
    }

    public function subscribes(): array
    {
        return [
            ReadOnlyBehavior::class,
        ];
    }

    public function getEntityClass() : string
    {
        return TransactionEntity::class;
    }
}
