<?php

namespace App\Game\Rpc\Controllers;

use App\Game\Domain\Interfaces\Services\CategoryServiceInterface;
use ZnLib\Rpc\Rpc\Base\BaseCrudRpcController;

class CategoryController extends BaseCrudRpcController
{

    public function __construct(CategoryServiceInterface $service)
    {
        $this->service = $service;
    }
}
