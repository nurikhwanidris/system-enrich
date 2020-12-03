<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ToursPrice Entity
 *
 * @property int $id
 * @property int $tour_id
 * @property string $twn
 * @property string $sgl
 * @property string $ctw
 * @property string $cwb
 * @property string $cnb
 * @property string $snr_twn
 * @property string $snr_sgl
 *
 * @property \App\Model\Entity\Tour $tour
 */
class ToursPrice extends Entity
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
        'twn' => true,
        'sgl' => true,
        'ctw' => true,
        'cwb' => true,
        'cnb' => true,
        'snr_twn' => true,
        'snr_sgl' => true,
        'tour' => true,
    ];
}
