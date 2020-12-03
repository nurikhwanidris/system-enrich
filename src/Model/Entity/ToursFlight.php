<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ToursFlight Entity
 *
 * @property int $id
 * @property int $tour_id
 * @property string $airlines
 * @property string $flight1
 * @property string $sector1
 * @property string $etd1
 * @property string $eta1
 * @property string $flight2
 * @property string $sector2
 * @property string $etd2
 * @property string $eta2
 * @property string $flight3
 * @property string $sector3
 * @property string $etd3
 * @property string $eta3
 * @property string $flight4
 * @property string $sector4
 * @property string $etd4
 * @property string $eta4
 *
 * @property \App\Model\Entity\Tour $tour
 */
class ToursFlight extends Entity
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
        'airlines' => true,
        'flight1' => true,
        'sector1' => true,
        'etd1' => true,
        'eta1' => true,
        'flight2' => true,
        'sector2' => true,
        'etd2' => true,
        'eta2' => true,
        'flight3' => true,
        'sector3' => true,
        'etd3' => true,
        'eta3' => true,
        'flight4' => true,
        'sector4' => true,
        'etd4' => true,
        'eta4' => true,
        'tour' => true,
    ];
}
