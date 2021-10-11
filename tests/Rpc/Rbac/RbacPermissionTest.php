<?php

namespace Tests\Rpc\User;

use Tests\Enums\UserEnum;
use Tests\Rpc\BaseTest;
use Tests\Traits\CrudRpcTestTrait;
use ZnCore\Base\Libs\Store\StoreFile;
use ZnTool\Test\Helpers\TestHelper;

class RbacPermissionTest extends BaseTest
{

    use CrudRpcTestTrait;

    protected function getExistedId(): int
    {
        return 11;
    }

    private function getRoleCount(): int
    {
        $permissionsFile = __DIR__ . '/../../data/Rbac/role.json';
        $store = new StoreFile($permissionsFile);
        return count($store->load());
    }

    protected function getFirstId(): int
    {
        return $this->getRoleCount() + 1;
    }

    protected function getNextId(): int
    {
        return $this->getTotalCount() + $this->getRoleCount() + 1;
    }

    protected function fixtures(): array
    {
        return [
            //'application_application',
        ];
    }

    protected function baseMethod(): string
    {
        return 'rbacPermission';
    }

    protected function itemsFileName(): string
    {
        return __DIR__ . '/../../data/Rbac/permission.json';
    }

    public function testUnauthorized()
    {
        $response = $this->all();
        $this->getRpcAssert($response)->assertUnauthorized();

        $response = $this->oneById($this->getExistedId());
        $this->getRpcAssert($response)->assertUnauthorized();

        $response = $this->create([]);
        $this->getRpcAssert($response)->assertUnauthorized();

        $response = $this->update([]);
        $this->getRpcAssert($response)->assertUnauthorized();

        $response = $this->deleteById($this->getExistedId());
        $this->getRpcAssert($response)->assertUnauthorized();
    }

    public function testAllSuccess()
    {
        $response = $this->all(['perPage' => 150], UserEnum::ADMIN);
        if(TestHelper::isRewriteData()) {
            $this->getRepository()->dumpAll($response->getResult());
        }
        $this->getRpcAssert($response)->assertResult($this->getRepository()->allAsArray());
    }

    public function testPaginationSuccess()
    {
        $response = $this->all(['perPage' => 1], UserEnum::ADMIN);
        $this->getRpcAssert($response)->assertResult([$this->getRepository()->oneByIdAsArray($this->getFirstId())]);
        $this->getRpcAssert($response)->assertPagination($this->getTotalCount(), 1, 1, 1);

        $response = $this->all(['perPage' => 1, 'page' => 2], UserEnum::ADMIN);
        $this->getRpcAssert($response)->assertResult([$this->getRepository()->oneByIdAsArray($this->getFirstId() + 1)]);
        $this->getRpcAssert($response)->assertPagination($this->getTotalCount(), 1, 1, 2);
    }

    public function testAllForbidden()
    {
        $response = $this->all([], UserEnum::USER7);
        $this->getRpcAssert($response)->assertForbidden();
    }

    public function testOneByIdSuccess()
    {
        $response = $this->oneById($this->getExistedId(), UserEnum::ADMIN);
        $this->getRpcAssert($response)->assertResult($this->getRepository()->oneByIdAsArray($this->getExistedId()));
    }

    public function testOneByIdForbidden()
    {
        $response = $this->oneById($this->getExistedId(), UserEnum::USER7);
        $this->getRpcAssert($response)->assertForbidden();
    }

    public function testCreateSuccess()
    {
        $response = $this->create([
            'name' => 'custom1',
            'title' => 'Custom 1',
        ], UserEnum::ADMIN);
        //dd($response);
        $this->getRpcAssert($response)->assertResult([
            "id" => $this->getNextId(),
            'name' => 'custom1',
            'title' => 'Custom 1',
        ]);

        // check created entity
        $this->assertItem([
            "id" => $this->getNextId(),
            'name' => 'custom1',
            'title' => 'Custom 1',
        ], UserEnum::ADMIN);
    }

    public function testCreateForbidden()
    {
        $response = $this->create([], UserEnum::USER7);
        $this->getRpcAssert($response)->assertForbidden();

        // check created entity
        $this->assertNotFoundById($this->getNextId(), UserEnum::ADMIN);
    }

    public function testUpdateSuccess()
    {
        $response = $this->update([
            'id' => $this->getExistedId(),
            'title' => 'Custom 2',
        ], UserEnum::ADMIN);

        $this->getRpcAssert($response)->assertResult([
            "id" => $this->getExistedId(),
            "title" => "Custom 2",
        ]);

        // check updated entity
        $this->assertItem([
            "id" => $this->getExistedId(),
            "title" => "Custom 2",
        ], UserEnum::ADMIN);
    }

    public function testUpdateForbidden()
    {
        $response = $this->update([], UserEnum::USER7);
        $this->getRpcAssert($response)->assertForbidden();

        // check updated entity
        $this->assertExistsById($this->getExistedId(), UserEnum::ADMIN);
    }

    public function testDeleteSuccess()
    {
        //$this->markTestIncomplete('Тест временно отключен');

        $response = $this->deleteById($this->getExistedId(), UserEnum::ADMIN);
        $this->getRpcAssert($response)->assertIsResult();

        // check deleted entity
        $this->assertNotFoundById($this->getExistedId(), UserEnum::ADMIN);
    }

    public function testDeleteForbidden()
    {
        $response = $this->deleteById($this->getExistedId(), UserEnum::USER7);
        $this->getRpcAssert($response)->assertForbidden();

        // check deleted entity
        $this->assertExistsById($this->getExistedId(), UserEnum::ADMIN);
    }
}
