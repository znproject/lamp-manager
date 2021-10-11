<?php

namespace Tests\Rpc\Money;

use Tests\Enums\UserEnum;
use Tests\Rpc\BaseTest;
use Tests\Traits\RepositoryTestTrait;

class WalletTest extends BaseTest
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
        return __DIR__ . '/../../data/Money/wallet.json';
    }

    protected function itemsDirectory(): string {
        return __DIR__ . '/../../data/Money';
    }

    protected function defaultRpcMethod(): ?string
    {
        return 'moneyWallet.all';
    }

    public function testAllByAdmin()
    {
        $request = $this->createRequest(UserEnum::ADMIN);
        //$request->setMethod('moneyWallet.all');
        $response = $this->sendRequestByEntity($request);
        //dd($response);
        //$this->getRepositoryByName('wallet_admin.json')->dumpAll($response->getResult());
        $this->getRpcAssert($response)->assertResult($this->getRepository()->allAsArray());
    }

    /*public function testAllByUser2()
    {
        $request = $this->createRequest(UserEnum::DEVELOPER);
        //$request->setMethod('moneyWallet.all');
        $response = $this->sendRequestByEntity($request);
        dd($response);
        $this->getRepositoryByName('wallet_developer.json')->dumpAll($response->getResult());
        $this->getRpcAssert($response)->assertResult($this->getRepository()->allAsArray());
    }*/
}
