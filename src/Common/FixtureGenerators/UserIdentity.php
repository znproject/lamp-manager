<?php

namespace App\Common\FixtureGenerators;

use ZnLib\Fixture\Domain\Libs\DataWithCollectionFixture;
use ZnLib\Fixture\Domain\Libs\FixtureGenerator;

class UserIdentity extends DataWithCollectionFixture
{

    public $time = '2018-03-28 21:00:13';

    public function deps()
    {
        return [

        ];
    }

    public function count(): int
    {
        return 10;
    }

    public function collection(): array
    {
        return [
            [
                'id' => 1,
                'username' => 'Harold Fisher',
                'status_id' => 1,
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'id' => 2,
                'username' => 'George Marshall',
                'status_id' => 1,
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'id' => 3,
                'username' => 'Gerard Ray',
                'status_id' => 1,
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],
            [
                'id' => 4,
                'username' => 'Brent Martin',
                'status_id' => 1,
                'created_at' => $this->time,
                'updated_at' => $this->time,
            ],

        ];
    }

    public function callback($index, FixtureGenerator $fixtureFactory): array
    {
        $username = 'user' . $index;
        return [
            'id' => $index,
            'username' => $username . '1111111',
            'status_id' => 1,
            'created_at' => $this->time,
            'updated_at' => $this->time,
        ];
    }
}