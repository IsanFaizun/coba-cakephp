<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PurchasesFixture
 */
class PurchasesFixture extends TestFixture
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
                'supplier_id' => 1,
                'transaction_code' => 'Lorem ipsum dolor sit amet',
                'price' => 1,
                'created' => '2024-09-14 11:49:00',
                'modified' => '2024-09-14 11:49:00',
            ],
        ];
        parent::init();
    }
}
