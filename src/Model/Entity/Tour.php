<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tour Entity
 *
 * @property int $id
 * @property string $name
 * @property string $date
 * @property string $description
 * @property string $cities
 * @property string $include
 * @property string $exclude
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\ToursFlight[] $tours_flight
 * @property \App\Model\Entity\ToursPrice[] $tours_price
 * @property \App\Model\Entity\ToursSetting[] $tours_settings
 */
class Tour extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'date' => true,
        'description' => true,
        'cities' => true,
        'include' => true,
        'exclude' => true,
        'created' => true,
        'modified' => true,
        'tours_flight' => true,
        'tours_price' => true,
        'tours_settings' => true,
    ];
}
