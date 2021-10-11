<?php

namespace App\Money\Rpc\Controllers;

use App\Money\Domain\Interfaces\Services\MyWalletServiceInterface;
use ZnLib\Rpc\Rpc\Base\BaseCrudRpcController;

class WalletController extends BaseCrudRpcController
{

    public function __construct(MyWalletServiceInterface $service)
    {
        $this->service = $service;
    }
}
