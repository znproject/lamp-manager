<?php

namespace Tests\Traits;

use Tests\Helpers\FixtureHelper;
use ZnCore\Base\Helpers\DeprecateHelper;

DeprecateHelper::hardThrow();

trait CommonFixtureTrait
{

    protected function setUp(): void
    {
        $this->addFixtures(FixtureHelper::getCommonFixtures());
        parent::setUp();
    }
}
