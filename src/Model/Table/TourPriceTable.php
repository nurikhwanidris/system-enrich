<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class TourPriceTable extends Table
{

    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('tour_price');
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
            ->scalar('twn')
            ->maxLength('twn', 255)
            ->requirePresence('twn', 'create')
            ->notEmptyString('twn');

        $validator
            ->scalar('sgl')
            ->maxLength('sgl', 255)
            ->requirePresence('sgl', 'create')
            ->notEmptyString('sgl');

        $validator
            ->scalar('ctw')
            ->maxLength('ctw', 255)
            ->requirePresence('ctw', 'create')
            ->notEmptyString('ctw');

        $validator
            ->scalar('cwb')
            ->maxLength('cwb', 255)
            ->requirePresence('cwb', 'create')
            ->notEmptyString('cwb');

        $validator
            ->scalar('cnb')
            ->maxLength('cnb', 255)
            ->requirePresence('cnb', 'create')
            ->notEmptyString('cnb');

        $validator
            ->scalar('snr_twn')
            ->maxLength('snr_twn', 255)
            ->requirePresence('snr_twn', 'create')
            ->notEmptyString('snr_twn');

        $validator
            ->scalar('snr_sgl')
            ->maxLength('snr_sgl', 255)
            ->requirePresence('snr_sgl', 'create')
            ->notEmptyString('snr_sgl');

        return $validator;
    }

    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['tour_id'], 'Tour'), ['errorField' => 'tour_id']);

        return $rules;
    }
}
