<?php

namespace App\Game\Rpc\Controllers;

use App\Game\Domain\Interfaces\Services\PartnerServiceInterface;
use ZnLib\Rpc\Rpc\Base\BaseCrudRpcController;

class PartnerController extends BaseCrudRpcController
{

    public function __construct(PartnerServiceInterface $service)
    {
        $this->service = $service;
    }
}
