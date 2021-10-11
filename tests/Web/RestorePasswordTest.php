<?php

namespace Tests\Web;

class RestorePasswordTest extends BaseWebTest
{

    /*protected function fixtures(): array
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
    }*/

    protected function fixtures(): array
    {
        return [
            'summary_attempt',
            'notify_type',
            'notify_type_i18n',
            'notify_type_transport',
            'notify_transport',
        ];
    }

    public function getUri(): string
    {
        return 'restore-password';
    }

    public function testInvalidEmail()
    {
        $browser = $this->getBrowser();
        $this->sendForm($browser, $this->getUri(), 'Отправить', [
            'form[email]' => 'qwertyexample.com',
        ]);
        $this->createAssert($browser)
            ->assertContainsContent('Значение адреса электронной почты недопустимо.');
    }

    public function testSaveEmail()
    {
        $browser = $this->getBrowser();
        $this->sendForm($browser, $this->getUri(), 'Отправить', [
            'form[email]' => 'qwerty@example.com',
        ]);
        $this->createAssert($browser)
            //->assertIsNotFormError()
            ->assertContainsContent('Не найдено');
    }

    public function testSuccess()
    {
        $browser = $this->getBrowser();
        $this->sendForm($browser, $this->getUri(), 'Отправить', [
            'form[email]' => 'admin@example.com',
        ]);
        $this->createAssert($browser)
            ->assertContainsContent('Назначить новый пароль');

        $browser = $this->getBrowser();
        $this->sendForm($browser, $this->getUri(), 'Отправить', [
            'form[email]' => 'admin@example.com',
        ]);
        $this->createAssert($browser)
            ->assertContainsContent('Попытки исчерпаны. Вы можете повторить через');
    }
}
