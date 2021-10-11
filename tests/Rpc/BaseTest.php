<?php

namespace Tests\Rpc;

use Tests\Helpers\FixtureHelper;
use ZnLib\Rpc\Domain\Libs\ArrayAuthProvider;
use ZnLib\Rpc\Test\BaseRpcTest;

abstract class BaseTest extends BaseRpcTest
{

    /*public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $tokens = [
            'admin' => 'bearer XAgQTzcEFIK2PrvtwkMyvDFD6bUjgq33z3kycw9-3t-RY2Ru1NpAc3q5fr5NeRG1',
            'moderator' => 'bearer XAgQTzcEFIK2PrvtwkMyvDFD6bUjgq33z3kycw9-3t-RY2Ru1NpAc3q5fr5NeRG2',
            'developer' => 'bearer XAgQTzcEFIK2PrvtwkMyvDFD6bUjgq33z3kycw9-3t-RY2Ru1NpAc3q5fr5NeRG3',
            'bot' => 'bearer XAgQTzcEFIK2PrvtwkMyvDFD6bUjgq33z3kycw9-3t-RY2Ru1NpAc3q5fr5NeRG4',
            'user7' => 'bearer XAgQTzcEFIK2PrvtwkMyvDFD6bUjgq33z3kycw9-3t-RY2Ru1NpAc3q5fr5NeRG7',
            'user8' => 'bearer XAgQTzcEFIK2PrvtwkMyvDFD6bUjgq33z3kycw9-3t-RY2Ru1NpAc3q5fr5NeRG8',
            'user9' => 'bearer XAgQTzcEFIK2PrvtwkMyvDFD6bUjgq33z3kycw9-3t-RY2Ru1NpAc3q5fr5NeRG9',
            'user10' => 'bearer XAgQTzcEFIK2PrvtwkMyvDFD6bUjgq33z3kycw9-3t-RY2Ru1NpAc3q5fr5NeR10',
        ];
        $authProvider = new ArrayAuthProvider($this->getRpcProvider());
        $authProvider->setTokens($tokens);
        $this->setAuthProvider($authProvider);
    }*/

    protected function setUp(): void
    {
        $this->addFixtures(FixtureHelper::getCommonFixtures());
        parent::setUp();
    }
}
