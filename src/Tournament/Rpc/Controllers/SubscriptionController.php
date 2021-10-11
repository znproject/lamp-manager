<?php

namespace App\Tournament\Rpc\Controllers;

use App\Tournament\Domain\Interfaces\Services\SubscriptionServiceInterface;
use ZnLib\Rpc\Rpc\Base\BaseCrudRpcController;

class SubscriptionController extends BaseCrudRpcController
{

    public function __construct(SubscriptionServiceInterface $service)
    {
        $this->service = $service;
    }
}
