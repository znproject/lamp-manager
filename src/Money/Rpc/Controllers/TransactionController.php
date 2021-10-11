<?php

namespace App\Money\Rpc\Controllers;

use App\Money\Domain\Interfaces\Services\TransactionServiceInterface;
use ZnLib\Rpc\Rpc\Base\BaseCrudRpcController;

class TransactionController extends BaseCrudRpcController
{

    public function __construct(TransactionServiceInterface $service)
    {
        $this->service = $service;
    }
}
