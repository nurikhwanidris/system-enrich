<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class TourSettingsTable extends Table
{

    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('tour_settings');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Tour', [
            'foreignKey' => 'tour_id',
            'joinType' => 'INNER',
        ]);
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('image')
            ->maxLength('image', 255)
            ->requirePresence('image', 'create')
            ->notEmptyFile('image');

        $validator
            ->scalar('status')
            ->maxLength('status', 255)
            ->requirePresence('status', 'create')
            ->notEmptyString('status');

        $validator
            ->scalar('meals')
            ->maxLength('meals', 255)
            ->requirePresence('meals', 'create')
            ->notEmptyString('meals');

        $validator
            ->scalar('hotel')
            ->maxLength('hotel', 255)
            ->requirePresence('hotel', 'create')
            ->notEmptyString('hotel');

        $validator
            ->scalar('season')
            ->maxLength('season', 255)
            ->requirePresence('season', 'create')
            ->notEmptyString('season');

        $validator
            ->scalar('type')
            ->maxLength('type', 255)
            ->requirePresence('type', 'create')
            ->notEmptyString('type');

        $validator
            ->scalar('promo')
            ->maxLength('promo', 255)
            ->requirePresence('promo', 'create')
            ->notEmptyString('promo');

        $validator
            ->scalar('deposit')
            ->maxLength('deposit', 255)
            ->requirePresence('deposit', 'create')
            ->notEmptyString('deposit');

        $validator
            ->integer('deposit_amount')
            ->requirePresence('deposit_amount', 'create')
            ->notEmptyString('deposit_amount');

        $validator
            ->scalar('discount')
            ->maxLength('discount', 255)
            ->requirePresence('discount', 'create')
            ->notEmptyString('discount');

        $validator
            ->integer('discount_amount')
            ->requirePresence('discount_amount', 'create')
            ->notEmptyString('discount_amount');

        return $validator;
    }

    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['tour_id'], 'Tour'), ['errorField' => 'tour_id']);

        return $rules;
    }
}
