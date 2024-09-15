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
                'created' => '2024-09-15 09:57:09',
                'modified' => '2024-09-15 09:57:09',
                'created_by' => 1,
                'modified_by' => 1,
            ],
        ];
        parent::init();
    }
}
