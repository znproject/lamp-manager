<?php

namespace App\Money\Rpc\Controllers;

use App\Money\Domain\Exceptions\InsufficientFundsException;
use App\Money\Domain\Exceptions\TransferToSelfException;
use App\Money\Domain\Forms\TransferForm;
use App\Money\Domain\Interfaces\Services\TransferServiceInterface;
use ZnCore\Domain\Exceptions\UnprocessibleEntityException;
use ZnCore\Domain\Helpers\EntityHelper;
use ZnLib\Rpc\Domain\Entities\RpcRequestEntity;
use ZnLib\Rpc\Domain\Entities\RpcResponseEntity;
use ZnLib\Rpc\Rpc\Base\BaseRpcController;

class TransferController extends BaseRpcController
{

    public function __construct(TransferServiceInterface $transferService)
    {
        $this->service = $transferService;
    }

    public function transfer(RpcRequestEntity $requestEntity): RpcResponseEntity
    {
        $transferForm = new TransferForm();
        EntityHelper::setAttributes($transferForm, $requestEntity->getParams());

        try {
            $entity = $this->service->transfer($transferForm);
        } catch (InsufficientFundsException $insufficientFundsException) {
            $e = new UnprocessibleEntityException();
            $e->add('amount', 'Insufficient funds! notEnoughAmount: ' . $insufficientFundsException->getNotEnoughAmount());
            throw $e;
        } catch (TransferToSelfException $transferToSelfException) {
            $e = new UnprocessibleEntityException();
            $e->add('recipientId', 'Transfer to self error!');
            throw $e;
        }

        $data = EntityHelper::toArray($entity);

        $response = new RpcResponseEntity();
        $response->setResult($data);
        return $response;
    }

    public function issue(RpcRequestEntity $requestEntity): RpcResponseEntity
    {
        $transferForm = new TransferForm();
        EntityHelper::setAttributes($transferForm, $requestEntity->getParams());

        try {
            $entity = $this->service->issue($transferForm);
        } catch (InsufficientFundsException $insufficientFundsException) {
            $e = new UnprocessibleEntityException();
            $e->add('amount', 'Insufficient funds! notEnoughAmount: ' . $insufficientFundsException->getNotEnoughAmount());
            throw $e;
        } catch (TransferToSelfException $transferToSelfException) {
            $e = new UnprocessibleEntityException();
            $e->add('recipientId', 'Transfer to self error!');
            throw $e;
        }

        $data = EntityHelper::toArray($entity);

        $response = new RpcResponseEntity();
        $response->setResult($data);
        return $response;
    }
}
