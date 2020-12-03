<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ToursSetting Entity
 *
 * @property int $id
 * @property int $tour_id
 * @property string $image
 * @property string $status
 * @property string $meals
 * @property string $hotel
 * @property string $season
 * @property string $type
 * @property string $promo
 * @property string $deposit
 * @property int $deposit_amount
 * @property string $discount
 * @property int $discount_amount
 *
 * @property \App\Model\Entity\Tour $tour
 */
class ToursSetting extends Entity
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
        'tour_id' => true,
        'image' => true,
        'status' => true,
        'meals' => true,
        'hotel' => true,
        'season' => true,
        'type' => true,
        'promo' => true,
        'deposit' => true,
        'deposit_amount' => true,
        'discount' => true,
        'discount_amount' => true,
        'tour' => true,
    ];
}
