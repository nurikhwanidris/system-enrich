<?php

declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

class TourPrice extends Entity
{

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
