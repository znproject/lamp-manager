<?php

namespace Tests\Rpc\Application;

use Tests\Enums\UserEnum;
use Tests\Rpc\BaseTest;
use Tests\Traits\CrudRpcTestTrait;

class ApplicationTest extends BaseTest
{

    use CrudRpcTestTrait;

    protected function getExistedId(): int
    {
        return 2;
    }

    protected function fixtures(): array
    {
        return [
            'application_application',
        ];
    }

    protected function baseMethod(): string
    {
        return 'application';
    }

    protected function itemsFileName(): string
    {
        return __DIR__ . '/../../data/Application/application.php';
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
        $response = $this->all(['perPage' => 50], UserEnum::ADMIN);
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
            'title' => 'Custom 1',
            'status_id' => 100,
        ], UserEnum::ADMIN);
        $this->getRpcAssert($response)->assertResult([
            "id" => $this->getNextId(),
            "title" => "Custom 1",
            "statusId" => 100,
        ]);

        // check created entity
        $this->assertItem([
            "id" => $this->getNextId(),
            "title" => "Custom 1",
            "statusId" => 100,
        ], UserEnum::ADMIN);
    }

    public function testCreateForbidden()
    {
        $response = $this->create([
            'title' => 'Custom 1',
            'status_id' => 100,
        ], UserEnum::USER7);
        $this->getRpcAssert($response)->assertForbidden();

        // check created entity
        $this->assertNotFoundById($this->getNextId(), UserEnum::ADMIN);
    }

    public function testUpdateSuccess()
    {
        $response = $this->update([
            'id' => $this->getExistedId(),
            'title' => 'Custom 1',
        ], UserEnum::ADMIN);

        $this->getRpcAssert($response)->assertResult([
            "id" => $this->getExistedId(),
            "title" => "Custom 1",
            "statusId" => 100,
        ]);

        // check updated entity
        $this->assertItem([
            "id" => $this->getExistedId(),
            "title" => "Custom 1",
            "statusId" => 100,
        ], UserEnum::ADMIN);
    }

    public function testUpdateForbidden()
    {
        $response = $this->update([
            'id' => $this->getExistedId(),
            'title' => 'Custom 1',
        ], UserEnum::USER7);
        $this->getRpcAssert($response)->assertForbidden();

        // check updated entity
        $this->assertExistsById($this->getExistedId(), UserEnum::ADMIN);
    }

    public function testDeleteSuccess()
    {
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
