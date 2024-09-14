<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MotorcyclesFixture
 */
class MotorcyclesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'year' => 1,
                'created' => '2024-09-14 09:00:05',
                'modified' => '2024-09-14 09:00:05',
            ],
        ];
        parent::init();
    }
}
