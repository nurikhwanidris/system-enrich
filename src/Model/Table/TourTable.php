<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class TourTable extends Table
{

    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('tour');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('TourFlight', [
            'foreignKey' => 'tour_id',
        ]);
        $this->hasMany('TourPrice', [
            'foreignKey' => 'tour_id',
        ]);
        $this->hasMany('TourSettings', [
            'foreignKey' => 'tour_id',
        ]);
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('date')
            ->requirePresence('date', 'create')
            ->notEmptyString('date');

        $validator
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        $validator
            ->scalar('cities')
            ->requirePresence('cities', 'create')
            ->notEmptyString('cities');

        $validator
            ->scalar('include')
            ->requirePresence('include', 'create')
            ->notEmptyString('include');

        $validator
            ->scalar('exclude')
            ->requirePresence('exclude', 'create')
            ->notEmptyString('exclude');

        return $validator;
    }
}
