<?php

namespace Tests\Rpc\Person;

use Tests\Enums\UserEnum;
use Tests\Rpc\BaseTest;

abstract class PersonTest extends BaseTest
{

    protected function fixtures(): array
    {
        return [
            'eav_attribute',
            'eav_category',
            'eav_entity',
            'eav_entity_attribute',
            'eav_enum',
            'eav_measure',
            'eav_validation',
            'eav_value',
        ];
    }

    protected function defaultRpcMethod(): ?string
    {
        return 'person.oneById';
    }

    public function testIdentityCardSuccess()
    {
        $request = $this->createRequest(UserEnum::ADMIN);
        $request->setMethod('personIdentityCard.oneById');
        $request->setParams([
            "id" => 1,
        ]);

        $response = $this->sendRequestByEntity($request);
        $this->getRpcAssert($response)
            ->assertIsResult()
            ->assertResult([
                'issued' => 'МВД РК',
                'issuedDate' => '2010.07.08',
                'number' => '012345678',
                'validDate' => '2028.07.08',
            ]);
    }

    public function testInfoSuccess()
    {
        $request = $this->createRequest(UserEnum::ADMIN);
        $request->setMethod('personInfo.oneById');
        $request->setParams([
            "id" => 1,
        ]);

        $response = $this->sendRequestByEntity($request);
        $this->getRpcAssert($response)
            ->assertIsResult()
            ->assertResult([
                "firstName" => "Григорий",
                "middleName" => "Васильевич",
                "lastName" => "Песков",
                "birthDate" => "1976-04-03",
                "iin" => "760403300198",
            ]);
    }

    public function testBirthCertSuccess()
    {
        $request = $this->createRequest(UserEnum::ADMIN);
        $request->setMethod('personBirthCertificate.oneById');
        $request->setParams([
            "id" => 1,
        ]);

        $response = $this->sendRequestByEntity($request);
        $this->getRpcAssert($response)
            ->assertIsResult()
            ->assertResult([
                "issueDate" => "1999.06.02",
                "number" => "123456789",
                "series" => "455888",
            ]);
    }

    public function testContactSuccess()
    {
        $request = $this->createRequest(UserEnum::ADMIN);
        $request->setMethod('personContact.oneById');
        $request->setParams([
            "id" => 1,
        ]);

        $response = $this->sendRequestByEntity($request);
        $this->getRpcAssert($response)
            ->assertIsResult()
            ->assertResult([
                'email' => 'qwerty@example.com',
                'home' => '45566',
                'mobile' => '+77771112233',
                'work' => '+77774445566',
            ]);
    }

    public function testAddressSuccess()
    {
        $request = $this->createRequest(UserEnum::ADMIN);
        $request->setMethod('personAddress.oneById');
        $request->setParams([
            "id" => 1,
        ]);

        $response = $this->sendRequestByEntity($request);
        $this->getRpcAssert($response)
            ->assertIsResult()
            ->assertResult([
                "registrationAddress" => "г Караганда, ул. Пушкина",
                "residenceAddress" => "г Караганда, ул. Пушкина",
                "houseNumber" => "123",
                "flatNumber" => "45",
                "housingNumber" => "4",
            ]);
    }

    public function testPassportSuccess()
    {
        $request = $this->createRequest(UserEnum::ADMIN);
        $request->setMethod('personPassport.oneById');
        $request->setParams([
            "id" => 1,
        ]);

        $response = $this->sendRequestByEntity($request);
        $this->getRpcAssert($response)
            ->assertIsResult()
            ->assertResult([
                "issued" => "МВД РК",
                "issuedDate" => "2008.02.01",
                "number" => "12313213213",
                "series" => "1211111",
                "validDate" => "2020.02.01",
            ]);
    }
}
