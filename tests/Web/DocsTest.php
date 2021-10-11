<?php

namespace Tests\Web;

use Tests\Enums\UserEnum;
use Tests\Helpers\FixtureHelper;

class DocsTest extends BaseWebTest
{

    protected function fixtures(): array
    {
        return FixtureHelper::getCommonFixtures();
    }

    public function testListUnauthorized()
    {
        $this->assertUnauthorized('json-rpc');
        $this->assertUnauthorized('json-rpc/view/index');
        $this->assertUnauthorized('json-rpc/download/index');
        $this->assertUnauthorized('json-rpc/view/qwerty');
    }

    public function testListSuccess()
    {
        $browser = $this->getBrowserByLogin(UserEnum::ADMIN);
        $this->sendRequest($browser, 'json-rpc');
        $this->createAssert($browser)
            ->assertContainsContent('Tournament JSON-RPC')
            ->assertContainsContent('API documentation');
    }

    public function testViewSuccess()
    {
        $browser = $this->getBrowserByLogin(UserEnum::ADMIN);
        $this->sendRequest($browser, 'json-rpc/view/index');
        $this->createAssert($browser)
            ->assertContainsContent('АПИ реализована в формате JSON-RPC. Спецификация описана');
    }

    public function testDownloadSuccess()
    {
        $browser = $this->getBrowserByLogin(UserEnum::ADMIN);
        $this->sendRequest($browser, 'json-rpc/download/index');
        $this->createAssert($browser)
            ->assertContainsContent('АПИ реализована в формате JSON-RPC. Спецификация описана');
    }
}
