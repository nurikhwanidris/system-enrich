<?php

declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Tour extends Entity
{
    protected $_accessible = [
        'name' => true,
        'date' => true,
        'description' => true,
        'cities' => true,
        'include' => true,
        'exclude' => true,
        'created' => true,
        'modified' => true,
        'tour_flight' => true,
        'tour_price' => true,
        'tour_settings' => true,
    ];
}
