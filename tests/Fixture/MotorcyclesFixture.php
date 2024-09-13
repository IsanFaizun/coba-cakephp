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
                'brand' => 'Lorem ipsum dolor sit amet',
                'model' => 'Lorem ipsum dolor sit amet',
                'price' => 1.5,
                'year' => 1,
                'status' => 'Lorem ipsum dolor sit amet',
                'created' => '2024-09-13 11:11:43',
                'modified' => '2024-09-13 11:11:43',
            ],
        ];
        parent::init();
    }
}
