<?php

namespace Tests\Web;

use Tests\Helpers\FixtureHelper;

abstract class BaseWebTest extends \ZnLib\Web\Test\BaseWebTest
{

    protected function setUp(): void
    {
        $this->addFixtures(FixtureHelper::getCommonFixtures());
        parent::setUp();
    }
}
