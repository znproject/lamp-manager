<?php

namespace App\Tournament\Rpc\Controllers;

use App\Tournament\Domain\Interfaces\Services\ScrambleServiceInterface;
use ZnLib\Rpc\Rpc\Base\BaseCrudRpcController;

class ScrambleController extends BaseCrudRpcController
{

    public function __construct(ScrambleServiceInterface $service)
    {
        $this->service = $service;
    }
}
