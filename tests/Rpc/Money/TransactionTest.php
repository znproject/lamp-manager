<?php

namespace Tests\Rpc\Money;

use Tests\Enums\UserEnum;
use Tests\Rpc\BaseTest;
use Tests\Traits\RepositoryTestTrait;

class TransactionTest extends BaseTest
{

    use RepositoryTestTrait;

    protected function fixtures(): array
    {
        return [
            'money_transaction',
            'money_wallet',
        ];
    }

    protected function itemsFileName(): string
    {
        return __DIR__ . '/../../data/Money/transaction.json';
    }

    protected function itemsDirectory(): string {
        return __DIR__ . '/../../data/Money';
    }

    protected function defaultRpcMethod(): ?string
    {
        return 'moneyTransaction.all';
    }

    public function testAll()
    {
        $request = $this->createRequest(UserEnum::ADMIN);
        //$request->setMethod('moneyWallet.all');
        $response = $this->sendRequestByEntity($request);
        //$this->getRepositoryByName('transaction_admin.json')->dumpAll($response->getResult());
        $this->getRpcAssert($response)->assertResult($this->getRepository()->allAsArray());
    }
}
