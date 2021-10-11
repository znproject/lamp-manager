<?php

namespace App\Tournament\Rpc\Controllers;

use App\Tournament\Domain\Interfaces\Services\TournamentServiceInterface;
use ZnLib\Rpc\Rpc\Base\BaseCrudRpcController;

class TournamentController extends BaseCrudRpcController
{

    public function __construct(TournamentServiceInterface $service)
    {
        $this->service = $service;
    }
}
