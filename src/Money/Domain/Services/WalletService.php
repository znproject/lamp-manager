<?php

namespace App\Money\Domain\Services;

use App\Money\Domain\Interfaces\Services\WalletServiceInterface;
use ZnBundle\User\Domain\Interfaces\Services\AuthServiceInterface;
use ZnCore\Domain\Interfaces\Libs\EntityManagerInterface;
use App\Money\Domain\Interfaces\Repositories\WalletRepositoryInterface;
use ZnCore\Domain\Base\BaseCrudService;
use App\Money\Domain\Entities\WalletEntity;

/**
 * @method WalletRepositoryInterface getRepository()
 */
class WalletService extends BaseCrudService implements WalletServiceInterface
{

    private $authService;

    public function __construct(EntityManagerInterface $em, AuthServiceInterface $authService)
    {
        $this->setEntityManager($em);
        $this->authService = $authService;
    }

    public function getEntityClass() : string
    {
        return WalletEntity::class;
    }

    public function oneMyByCurrencyId(int $currencyId) : WalletEntity
    {
        $identityId = $this->authService->getIdentity()->getId();
        return $this->getRepository()->oneUnique($identityId, $currencyId);
    }
}
