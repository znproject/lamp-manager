<?php

namespace Tests\Rpc\Rpc;

use Tests\Enums\UserEnum;
use Tests\Rpc\BaseTest;
use ZnLib\Rpc\Domain\Enums\HttpHeaderEnum;
use ZnLib\Rpc\Domain\Enums\RpcErrorCodeEnum;

class RpcVersionTest extends BaseTest
{

    protected function fixtures(): array
    {
        return [
            'summary_attempt',
        ];
    }

    protected function defaultRpcMethod(): ?string
    {
        return 'authentication.getTokenByPassword';
    }

    protected function defaultRpcMethodVersion(): ?int
    {
        return 9999;
    }

    public function testGetTokenSuccess()
    {
        $request = $this->createRequest();
        $request->setMetaItem(HttpHeaderEnum::VERSION, 1);
        $request->setParams([
            'login' => UserEnum::ADMIN,
            'password' => UserEnum::PASSWORD,
        ]);

        $response = $this->sendRequestByEntity($request);
        $result = $response->getResult();
        $token = $result['token'];

        $this->assertContains('bearer', $token);
    }

    public function testGetTokenFail()
    {
        $request = $this->createRequest();
        $request->setMetaItem(HttpHeaderEnum::VERSION, 2);
        $request->setParams([
            'login' => UserEnum::ADMIN,
            'password' => UserEnum::PASSWORD,
        ]);

        $response = $this->sendRequestByEntity($request);
        $this->getRpcAssert($response)->assertErrorCode(RpcErrorCodeEnum::SERVER_ERROR_METHOD_NOT_FOUND);
        $this->getRpcAssert($response)->assertErrorMessage('Not found handler');
    }
}
