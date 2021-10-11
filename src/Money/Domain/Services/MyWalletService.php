<?php

namespace App\Money\Domain\Services;

use App\Money\Domain\Entities\WalletEntity;
use App\Money\Domain\Interfaces\Repositories\WalletRepositoryInterface;
use App\Money\Domain\Interfaces\Services\BalanceServiceInterface;
use App\Money\Domain\Interfaces\Services\MyWalletServiceInterface;
use ZnBundle\User\Domain\Interfaces\Services\AuthServiceInterface;
use ZnCore\Domain\Base\BaseCrudService;
use ZnCore\Domain\Behaviors\MyDataBehavior;
use ZnCore\Domain\Behaviors\ReadOnlyBehavior;
use ZnCore\Domain\Interfaces\Libs\EntityManagerInterface;
use ZnCore\Domain\Libs\Query;

/**
 * @method WalletRepositoryInterface getRepository()
 */
class MyWalletService extends BaseCrudService implements MyWalletServiceInterface
{

    private $authService;
    private $balanceService;

    public function __construct(
        EntityManagerInterface $em,
        AuthServiceInterface $authService,
        BalanceServiceInterface $balanceService
    )
    {
        $this->setEntityManager($em);
        $this->authService = $authService;
        $this->balanceService = $balanceService;
    }

    public function subscribes(): array
    {
        return [
            ReadOnlyBehavior::class,
            [
                'class' => MyDataBehavior::class,
                'attributeName' => 'identity_id',
            ],
        ];
    }

    public function getEntityClass(): string
    {
        return WalletEntity::class;
    }

    protected function forgeQuery(Query $query = null)
    {
        $query = parent::forgeQuery($query);
        $query->with('currency');
        return $query;
    }

    public function all(Query $query = null)
    {
        /** @var WalletEntity[] $collection */
        $collection = parent::all($query);
        foreach ($collection as $walletEntity) {
            if($walletEntity->getAmount() == null) {
                $this->balanceService->syncBalanceByWalletEntity($walletEntity);
            }
        }
        return $collection;
    }
}
