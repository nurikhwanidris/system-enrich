<?php

declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

class TourSetting extends Entity
{

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
