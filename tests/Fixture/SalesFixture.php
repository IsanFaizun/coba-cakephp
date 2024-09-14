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
                'transaction_code' => 'Lorem ipsum dolor sit amet',
                'price' => 1,
                'created' => '2024-09-14 08:59:03',
                'modified' => '2024-09-14 08:59:03',
            ],
        ];
        parent::init();
    }
}
