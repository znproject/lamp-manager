<?php

namespace App\Game\Rpc\Controllers;

use App\Game\Domain\Interfaces\Services\GameServiceInterface;
use ZnLib\Rpc\Rpc\Base\BaseCrudRpcController;

class GameController extends BaseCrudRpcController
{

    public function __construct(GameServiceInterface $service)
    {
        $this->service = $service;
    }
}
