<?php

namespace Tests\Web;

use Tests\Enums\UserEnum;
use Tests\Helpers\FixtureHelper;

class LanguageTest extends BaseWebTest
{

    protected function fixtures(): array
    {
        return FixtureHelper::getCommonFixtures();
    }

    public function testSwitchKzSuccess()
    {
        $browser = $this->getBrowserByLogin(UserEnum::ADMIN);
        $this->sendRequest($browser, 'language/current/switch?locale=kz-KK');
        $this->createAssert($browser)
            ->assertContainsContent('Тіл ауыстырылды');
    }

    public function testSwitchRuSuccess()
    {
        $browser = $this->getBrowserByLogin(UserEnum::ADMIN);
        $this->sendRequest($browser, 'language/current/switch?locale=ru-RU');
        $this->createAssert($browser)
            ->assertContainsContent('Язык переключен');
    }
}
