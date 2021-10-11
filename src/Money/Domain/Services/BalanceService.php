<?php

namespace App\Money\Domain\Services;

use App\Money\Domain\Entities\WalletEntity;
use App\Money\Domain\Interfaces\Repositories\TransactionRepositoryInterface;
use App\Money\Domain\Interfaces\Services\BalanceServiceInterface;
use ZnCore\Domain\Base\BaseService;
use ZnCore\Domain\Interfaces\Libs\EntityManagerInterface;

class BalanceService extends BaseService implements BalanceServiceInterface
{

    private $transactionRepository;

    public function __construct(EntityManagerInterface $em, TransactionRepositoryInterface $transactionRepository)
    {
        $this->setEntityManager($em);
        $this->transactionRepository = $transactionRepository;
    }

    public function calculateAmountByWalletId(int $walletId): float
    {
        $debt = $this->transactionRepository->calculateDebtByWalletId($walletId);
        $credit = $this->transactionRepository->calculateCreditByWalletId($walletId);
        return $debt - $credit;
    }

    public function syncBalance(int $walletId): void
    {
        /** @var WalletEntity $walletEntity */
        $walletEntity = $this->getEntityManager()->oneById(WalletEntity::class, $walletId);
        $amount = $this->calculateAmountByWalletId($walletEntity->getId());
        $walletEntity->setAmount($amount);
        //dd($walletEntity);
        $this->getEntityManager()->persist($walletEntity);
    }

    public function syncBalanceByWalletEntity(WalletEntity $walletEntity): void
    {
        /** @var WalletEntity $walletEntity */
        //$walletEntity = $this->getEntityManager()->oneById(WalletEntity::class, $walletId);
        $amount = $this->calculateAmountByWalletId($walletEntity->getId());
        $walletEntity->setAmount($amount);
        //dd($walletEntity);
        $this->getEntityManager()->persist($walletEntity);
    }
}
