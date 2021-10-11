<?php

namespace Tests\Rpc\Money;

use Illuminate\Support\Collection;
use Tests\Enums\UserEnum;
use Tests\Rpc\BaseTest;

class TransferTest extends BaseTest
{

    protected function fixtures(): array
    {
        return [
            'money_transaction',
            'money_wallet',
        ];
    }

    protected function defaultRpcMethod(): ?string
    {
        return 'moneyTransfer.transfer';
    }

    public function testTransferFromZeroWallet()
    {
        $this->checkWalletBalance(UserEnum::ADMIN, 1, '406');

        $request = $this->createRequest(UserEnum::ADMIN);
        $request->setParams([
            "recipientId" => 8,
            "amount" => 12,
        ]);
        $response = $this->sendRequestByEntity($request);
        //dd($response);
        $expected = [
            [
                "field" => "amount",
                "message" => "Insufficient funds! notEnoughAmount: 12",
            ],
        ];
        $this->getRpcAssert($response)->assertUnprocessableEntityErrors($expected);

        $this->checkWalletBalance(UserEnum::ADMIN, 1, '406');
    }

    public function testTransferInsufficientFunds()
    {
//        $this->markTestIncomplete('');
        $this->checkWalletBalance(UserEnum::ADMIN, 1, '406');

        $request = $this->createRequest(UserEnum::ADMIN);
        $request->setParams([
            "recipientId" => 4,
            "amount" => 1200,
        ]);
        $response = $this->sendRequestByEntity($request);
//        dd($response);
        $expected = [
            [
                "field" => "amount",
                "message" => "Insufficient funds! notEnoughAmount: 794",
            ],
        ];
        $this->getRpcAssert($response)->assertUnprocessableEntityErrors($expected);

        $this->checkWalletBalance(UserEnum::ADMIN, 1, '406');
    }

    public function testTransferToSelf()
    {
        $this->checkWalletBalance(UserEnum::ADMIN, 1, '406');

        $request = $this->createRequest(UserEnum::ADMIN);
        $request->setParams([
            "recipientId" => 1,
            "amount" => 12,
        ]);
        $response = $this->sendRequestByEntity($request);
        //dd($response);
        $expected = [
            [
                "field" => "recipientId",
                "message" => "Transfer to self error!",
            ],
        ];
        $this->getRpcAssert($response)->assertUnprocessableEntityErrors($expected);

        $this->checkWalletBalance(UserEnum::ADMIN, 1, '406');
    }

    public function testTransferSuccess()
    {
        $this->checkWalletBalance(UserEnum::ADMIN, 1, '406');

        $request = $this->createRequest(UserEnum::ADMIN);
        $request->setParams([
            "recipientId" => 4,
            "amount" => 12,
        ]);
        $response = $this->sendRequestByEntity($request);
//        dd($response);
        $this->getRpcAssert($response)->assertIsResult();

        $this->checkWalletBalance(UserEnum::ADMIN, 1, '394');
    }

    public function testIssueSuccess()
    {
        $this->checkWalletBalance(UserEnum::DEVELOPER, 7, '-1000');
        $this->checkWalletBalance(UserEnum::MODERATOR, 4, '594');

        $request = $this->createRequest(UserEnum::DEVELOPER);
        $request->setMethod('moneyTransfer.issue');
        $request->setParams([
            "recipientId" => 4,
            "amount" => 1200000,
        ]);
        $response = $this->sendRequestByEntity($request);
//        dd($response);
        $this->getRpcAssert($response)->assertIsResult();

        $this->checkWalletBalance(UserEnum::DEVELOPER, 7, '-1201000');
        $this->checkWalletBalance(UserEnum::MODERATOR, 4, '1200594');
    }

    public function testIssueFail()
    {
//        $this->checkWalletBalance(UserEnum::DEVELOPER, 7, '-1000');
        $this->checkWalletBalance(UserEnum::MODERATOR, 4, '594');

        $request = $this->createRequest(UserEnum::MODERATOR);
        $request->setMethod('moneyTransfer.issue');
        $request->setParams([
            "recipientId" => 4,
            "amount" => 1200000,
        ]);
        $response = $this->sendRequestByEntity($request);
        //dd($response);
        $this->getRpcAssert($response)->assertForbidden();

//        $this->checkWalletBalance(UserEnum::DEVELOPER, 7, '-1201000');
        $this->checkWalletBalance(UserEnum::MODERATOR, 4, '594');
    }

    private function checkBalance(string $user, int $currencyId, float $amount) {
        $request = $this->createRequest($user);
        $request->setMethod('moneyWallet.all');
        $response = $this->sendRequestByEntity($request);
        $collection = new Collection($response->getResult());
        $walletArray = $collection->where('currencyId', '=', $currencyId)->first();
        $this->assertEquals($amount, $walletArray['amount']);
        //dd($walletArray['amount']);
    }

    private function checkWalletBalance(string $user, int $walletId, float $amount) {
        $request = $this->createRequest($user);
        $request->setMethod('moneyWallet.all');
        $response = $this->sendRequestByEntity($request);
        $collection = new Collection($response->getResult());
        $walletArray = $collection->where('id', '=', $walletId)->first();
        $this->assertEquals($amount, $walletArray['amount']);
        //dd($walletArray['amount']);
    }
}
