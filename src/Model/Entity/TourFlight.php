<?php

declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

class TourFlight extends Entity
{

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
