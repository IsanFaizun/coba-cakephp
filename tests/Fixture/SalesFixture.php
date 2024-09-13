<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SalesFixture
 */
class SalesFixture extends TestFixture
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
                'motorcycle_id' => 1,
                'customer_id' => 1,
                'price' => 1.5,
                'date' => '2024-09-13',
                'created' => '2024-09-13 11:16:44',
                'modified' => '2024-09-13 11:16:44',
            ],
        ];
        parent::init();
    }
}
