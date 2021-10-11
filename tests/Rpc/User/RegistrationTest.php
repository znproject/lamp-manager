<?php

namespace Tests\Rpc\User;

use Tests\Helpers\EmailHelper;
use Tests\Rpc\BaseTest;

class RegistrationTest extends BaseTest
{

    public function testRequestActivationCodeSuccess()
    {
        $request = $this->createRequest();
        $request->setMethod('userRegistration.requestActivationCode');
        $request->setParams([
            "email" => "admin123@example.com",
        ]);

        $response = $this->sendRequestByEntity($request);
        $this->getRpcAssert($response)->assertIsResult();
    }

    public function testRequestActivationCodeInvalidEmail()
    {
        $request = $this->createRequest();
        $request->setMethod('userRegistration.requestActivationCode');
        $request->setParams([
            "email" => "user123example.com",
        ]);

        $response = $this->sendRequestByEntity($request);

        $expected = [
            [
                "field" => "email",
                "message" => "Значение адреса электронной почты недопустимо.",
            ],
        ];

        $this->getRpcAssert($response)->assertUnprocessableEntityErrors($expected);
    }

    public function testCreateAccountSuccess()
    {
        // Запрос кода активации
        $request = $this->createRequest();
        $request->setMethod('userRegistration.requestActivationCode');
        $request->setParams([
            "email" => "user123@example.com",
        ]);
        $this->sendRequestByEntity($request);

        // Создание нового пароля
        $request = $this->createRequest();
        $request->setMethod('userRegistration.createAccount');
        $request->setParams([
            "email" => "user123@example.com",
            "code" => EmailHelper::getLastActivationCode(),
            "password" => "Qwerty123#",
            "password_confirm" => "Qwerty123#",
        ]);
        $response = $this->sendRequestByEntity($request);
        $this->getRpcAssert($response)->assertIsResult();

        // Повторная отправка запроса
        $response = $this->sendRequestByEntity($request);
        //dd($response);
        $this->getRpcAssert($response)
            //->assertErrorCode(404)
            ->assertUnprocessableEntityErrors([
                [
                    'field' => 'email',
                    'message' => 'Пользователь уже был зарегистрирован и активирован ранее',
                ],
            ]);

        /*$this->assertEntity([
            'to' => "user123@example.com",
            'subject' => "Ваш пароль изменен",
            //'body' => "Только что был изменен Ваш пароль. Если это были не вы, то переидите по этой ссылке",
            //'html' => "Только что был изменен Ваш пароль. Если это были не вы, то переидите по этой ссылке",
        ], EmailHelper::oneLast());*/
    }

    public function testCreateAccountLightPassword()
    {
        $request = $this->createRequest();
        $request->setMethod('userRegistration.createAccount');
        $request->setParams([
            "email" => "user123@example.com",
            "code" => "123456",
            "password" => "qwertyuio",
            "password_confirm" => "qwertyuio",
        ]);

        $response = $this->sendRequestByEntity($request);

        $expected = [
            [
                "field" => "password",
                "message" => "Слишком легкий пароль. Пароль должен содержать: латинские буквы нижнего регистра, латинские буквы верхнего регистра, цифры, спецсимволы",
            ],
        ];

        $this->getRpcAssert($response)->assertUnprocessableEntityErrors($expected);
    }

    public function testCreateAccountShortPassword()
    {
        $request = $this->createRequest();
        $request->setMethod('userRegistration.createAccount');
        $request->setParams([
            "email" => "user123@example.com",
            "code" => "123456",
            "password" => "Qwe",
            "password_confirm" => "Qwe",
        ]);

        $response = $this->sendRequestByEntity($request);

        $expected = [
            [
                "field" => "password",
                "message" => "Значение слишком короткое. Должно быть равно 6 символам или больше.",
            ],
            [
                "field" => "password",
                "message" => "Слишком легкий пароль. Пароль должен содержать: латинские буквы нижнего регистра, латинские буквы верхнего регистра, цифры, спецсимволы",
            ],
        ];

        $this->getRpcAssert($response)->assertUnprocessableEntityErrors($expected);
    }

    public function testCreateAccountNotEqualPasswordWithConfirm()
    {
        $request = $this->createRequest();
        $request->setMethod('userRegistration.createAccount');
        $request->setParams([
            "email" => "user123@example.com",
            "code" => "123456",
            "password" => "Qwerty123#",
            "password_confirm" => "Qwerty121#",
        ]);

        $response = $this->sendRequestByEntity($request);

        $expected = [
            [
                "field" => "passwordConfirm",
                "message" => "Неверный повтор пароля",
            ]
        ];

        $this->getRpcAssert($response)->assertUnprocessableEntityErrors($expected);
    }
}
