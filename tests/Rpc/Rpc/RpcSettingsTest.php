<?php

namespace Tests\Rpc\Rpc;

use Tests\Enums\UserEnum;
use Tests\Rpc\BaseTest;

class RpcSettingsTest extends BaseTest
{

    public function testViewSuccess()
    {
        $this->markTestIncomplete();
        $request = $this->createRequest(UserEnum::ADMIN);
        $request->setMethod('rpcSettings.view');
        $response = $this->sendRequestByEntity($request);
        $this->getRpcAssert($response)
            ->assertResult([
                "cryptoProviderStrategy" => "jsonDSig",
                "waitReceiptNotification" => true,
                "requireTimestamp" => true,
            ]);
    }

    public function testUpdateSuccess()
    {
        $request = $this->createRequest(UserEnum::ADMIN);
        $request->setMethod('rpcSettings.update');
        $request->setParams([
            "cryptoProviderStrategy" => "default",
            "waitReceiptNotification" => false,
            "requireTimestamp" => false,
        ]);
        $response = $this->sendRequestByEntity($request);
        $this->getRpcAssert($response)
            ->assertIsResult();

        // check result
        $request->setMethod('rpcSettings.view');
        $response = $this->sendRequestByEntity($request);
        $this->getRpcAssert($response)
            ->assertResult([
                "cryptoProviderStrategy" => "default",
                "waitReceiptNotification" => false,
                "requireTimestamp" => false,
            ]);
    }

    public function testPartialUpdateSuccess()
    {
        $this->markTestIncomplete();
        $request = $this->createRequest(UserEnum::ADMIN);
        $request->setMethod('rpcSettings.update');
        $request->setParams([
            "cryptoProviderStrategy" => "default",
        ]);
        $response = $this->sendRequestByEntity($request);
        $this->getRpcAssert($response)
            ->assertIsResult();

        // check result
        $request->setMethod('rpcSettings.view');
        $response = $this->sendRequestByEntity($request);
        $this->getRpcAssert($response)
            ->assertResult([
                "cryptoProviderStrategy" => "default",
                "waitReceiptNotification" => true,
                "requireTimestamp" => true,
            ]);
    }

    public function testUpdateValidation()
    {
        $request = $this->createRequest(UserEnum::ADMIN);
        $request->setMethod('rpcSettings.update');
        $request->setParams([
            "cryptoProviderStrategy" => "default111",
            "waitReceiptNotification" => false,
            "requireTimestamp" => false,
        ]);
        $response = $this->sendRequestByEntity($request);

        $expected = [
            [
                "field" => "cryptoProviderStrategy",
                "message" => "Выбранное Вами значение недопустимо.",
            ],
        ];
        $this->getRpcAssert($response)->assertUnprocessableEntityErrors($expected);
    }
}
