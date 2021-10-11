<?php

namespace App\Money\Domain\Services;

use App\Money\Domain\Entities\TransactionEntity;
use App\Money\Domain\Entities\WalletEntity;
use App\Money\Domain\Enums\Rbac\MoneyIssuePermissionEnum;
use App\Money\Domain\Enums\TransactionTypeEnum;
use App\Money\Domain\Exceptions\InsufficientFundsException;
use App\Money\Domain\Exceptions\TransferToSelfException;
use App\Money\Domain\Forms\TransferForm;
use App\Money\Domain\Interfaces\Services\BalanceServiceInterface;
use App\Money\Domain\Interfaces\Services\TransferServiceInterface;
use App\Money\Domain\Interfaces\Services\WalletServiceInterface;
use ZnBundle\User\Domain\Interfaces\Services\AuthServiceInterface;
use ZnCore\Domain\Base\BaseService;
use ZnCore\Domain\Interfaces\Libs\EntityManagerInterface;
use ZnUser\Rbac\Domain\Interfaces\Services\ManagerServiceInterface;

class TransferService extends BaseService implements TransferServiceInterface
{

    private $walletService;
    private $balanceService;
    private $managerService;

    public function __construct(
        EntityManagerInterface $em,
        WalletServiceInterface $walletService,
        BalanceServiceInterface $balanceService,
        ManagerServiceInterface $managerService
    )
    {
        $this->setEntityManager($em);
        $this->walletService = $walletService;
        $this->balanceService = $balanceService;
        $this->managerService = $managerService;
    }

    public function transfer(TransferForm $transferForm): void
    {
        /** @var WalletEntity $recipientWalletEntity */
        $recipientWalletEntity = $this->getEntityManager()->oneById(WalletEntity::class, $transferForm->getRecipientId());
        $senderWalletEntity = $this->walletService->oneMyByCurrencyId($recipientWalletEntity->getCurrencyId());

        $this->checkSelf($senderWalletEntity, $recipientWalletEntity);
        $this->checkBalance($senderWalletEntity->getId(), $transferForm->getAmount());
        $this->transferMoney($senderWalletEntity, $recipientWalletEntity, $transferForm->getAmount());
    }

    public function issue(TransferForm $transferForm): void
    {
        $this->managerService->checkMyAccess([
            MoneyIssuePermissionEnum::ISSUE,
        ]);
        /** @var WalletEntity $recipientWalletEntity */
        $recipientWalletEntity = $this->getEntityManager()->oneById(WalletEntity::class, $transferForm->getRecipientId());
        $senderWalletEntity = $this->walletService->oneMyByCurrencyId($recipientWalletEntity->getCurrencyId());

        $this->checkSelf($senderWalletEntity, $recipientWalletEntity);
        //$this->checkBalance($senderWalletEntity->getId(), $transferForm->getAmount());
        $this->transferMoney($senderWalletEntity, $recipientWalletEntity, $transferForm->getAmount());
    }

    private function transferMoney(WalletEntity $senderWalletEntity, WalletEntity $recipientWalletEntity, float $amount): void
    {
        $transactionEntity = new TransactionEntity();
        $transactionEntity->setAmount($amount);
        //$transactionEntity->setCurrencyId($recipientWalletEntity->getCurrencyId());
        $transactionEntity->setTypeId(TransactionTypeEnum::TRANSACTION);
        $transactionEntity->setSenderId($senderWalletEntity->getId());
        $transactionEntity->setRecipientId($recipientWalletEntity->getId());
        $this->getEntityManager()->persist($transactionEntity);

        $this->balanceService->syncBalance($senderWalletEntity->getId());
        $this->balanceService->syncBalance($recipientWalletEntity->getId());
    }

    private function checkSelf(WalletEntity $senderWalletEntity, WalletEntity $recipientWalletEntity): void
    {
        if($recipientWalletEntity->getId() == $senderWalletEntity->getId()) {
            throw new TransferToSelfException();
        }
    }

    private function checkBalance(int $walletId, float $amount): void
    {
        $senderBalanceAmount = $this->balanceService->calculateAmountByWalletId($walletId);
        if ($senderBalanceAmount < $amount) {
            $exception = new InsufficientFundsException();
            $exception->setNotEnoughAmount($amount - $senderBalanceAmount);
            throw $exception;
        }
    }
}
