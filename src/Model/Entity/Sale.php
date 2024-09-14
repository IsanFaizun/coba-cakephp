<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sale Entity
 *
 * @property int $id
 * @property int $motorcycle_id
 * @property int $customer_id
 * @property string $transaction_code
 * @property int $price
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Motorcycle $motorcycle
 * @property \App\Model\Entity\Customer $customer
 */
class Sale extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'motorcycle_id' => true,
        'customer_id' => true,
        'transaction_code' => true,
        'price' => true,
        'created' => true,
        'modified' => true,
        'motorcycle' => true,
        'customer' => true,
    ];
}
