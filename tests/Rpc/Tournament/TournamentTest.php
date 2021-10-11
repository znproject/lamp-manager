<?php

namespace Tests\Rpc\Tournament;

use Tests\Enums\UserEnum;
use Tests\Rpc\BaseTest;

class TournamentTest extends BaseTest
{

    protected function fixtures(): array
    {
        return [
            'money_transaction',
            'money_wallet',
        ];
    }

    public function testTransfer()
    {
        $request = $this->createRequest(UserEnum::ADMIN);
        $request->setMethod('moneyTransfer.transfer');
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
    }
}
