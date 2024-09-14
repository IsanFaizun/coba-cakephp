<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Motorcycle Entity
 *
 * @property int $id
 * @property string $name
 * @property int $year
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Purchase[] $purchases
 * @property \App\Model\Entity\Sale[] $sales
 */
class Motorcycle extends Entity
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
        'name' => true,
        'year' => true,
        'created' => true,
        'modified' => true,
        'purchases' => true,
        'sales' => true,
    ];
}
