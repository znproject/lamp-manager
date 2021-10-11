<?php

namespace Tests\Rpc\User;

use Tests\Enums\UserEnum;
use Tests\Rpc\BaseTest;
use ZnUser\Rbac\Domain\Enums\Rbac\SystemRoleEnum;

class RbacAssignmentTest extends BaseTest
{

    public function testAttachExistedError()
    {
        $request = $this->createRequest(UserEnum::ADMIN);
        $request->setMethod('rbacAssignment.attach');
        $request->setParams([
            "identityId" => 7,
            "itemName" => SystemRoleEnum::ADMINISTRATOR,
        ]);
        $response = $this->sendRequestByEntity($request);
        $this->getRpcAssert($response)->assertIsResult();

        $response = $this->sendRequestByEntity($request);
        $this->getRpcAssert($response)->assertErrorMessage('Assignment already exists');
    }

    public function testAttachUnprocessableError()
    {
        $request = $this->createRequest(UserEnum::ADMIN);
        $request->setMethod('rbacAssignment.attach');
        $request->setParams([
            "identityId" => 9999,
            "itemName" => 'qwertyu',
        ]);
        $response = $this->sendRequestByEntity($request);
        $this->getRpcAssert($response)->assertUnprocessableEntityErrors([
            [
                'field' => 'identityId',
                'message' => 'User not found',
            ],
            [
                'field' => 'itemName',
                'message' => 'Item not found',
            ],
        ]);
    }

    public function testDetachUnprocessableError()
    {
        $request = $this->createRequest(UserEnum::ADMIN);
        $request->setMethod('rbacAssignment.detach');
        $request->setParams([
            "identityId" => 9999,
            "itemName" => 'qwertyu',
        ]);
        $response = $this->sendRequestByEntity($request);
        $this->getRpcAssert($response)->assertUnprocessableEntityErrors([
            [
                'field' => 'identityId',
                'message' => 'User not found',
            ],
            [
                'field' => 'itemName',
                'message' => 'Item not found',
            ],
        ]);
    }

    public function testDetachNotFoundError()
    {
        $request = $this->createRequest(UserEnum::ADMIN);
        $request->setMethod('rbacAssignment.detach');
        $request->setParams([
            "identityId" => 7,
            "itemName" => SystemRoleEnum::USER,
        ]);
        $response = $this->sendRequestByEntity($request);
        $this->getRpcAssert($response)->assertIsResult();

        $response = $this->sendRequestByEntity($request);
        $this->getRpcAssert($response)
            ->assertNotFound();
    }

    public function testAttachAndDetach()
    {
        $request = $this->createRequest(UserEnum::ADMIN);
        $request->setMethod('rbacAssignment.attach');
        $request->setParams([
            "identityId" => 7,
            "itemName" => SystemRoleEnum::ADMINISTRATOR,
        ]);
        $response = $this->sendRequestByEntity($request);
        $this->getRpcAssert($response)->assertIsResult();

        $request = $this->createRequest(UserEnum::USER7);
        $request->setMethod('rbacRole.all');
        $response = $this->sendRequestByEntity($request);
        $this->getRpcAssert($response)->assertIsResult();

        $request = $this->createRequest(UserEnum::ADMIN);
        $request->setMethod('rbacAssignment.detach');
        $request->setParams([
            "identityId" => 7,
            "itemName" => SystemRoleEnum::ADMINISTRATOR,
        ]);
        $response = $this->sendRequestByEntity($request);
        $this->getRpcAssert($response)->assertIsResult();

        $request = $this->createRequest(UserEnum::USER7);
        $request->setMethod('rbacRole.all');
        $response = $this->sendRequestByEntity($request);
        $this->getRpcAssert($response)->assertForbidden();
    }

    public function testAllRoles()
    {
        $request = $this->createRequest(UserEnum::ADMIN);
        $request->setMethod('rbacAssignment.allRoles');
        $request->setParams([
            "identityId" => 7,
        ]);
        $response = $this->sendRequestByEntity($request);
        $this->getRpcAssert($response)->assertResult([
            [
                "id" => 7,
                "identityId" => 7,
                "itemName" => "rUser",
                "statusId" => 100,
            ],
        ]);
    }
}
