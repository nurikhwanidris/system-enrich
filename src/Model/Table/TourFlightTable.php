<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class TourFlightTable extends Table
{

    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('tour_flight');
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
            ->scalar('airlines')
            ->maxLength('airlines', 255)
            ->requirePresence('airlines', 'create')
            ->notEmptyString('airlines');

        $validator
            ->scalar('flight1')
            ->maxLength('flight1', 255)
            ->requirePresence('flight1', 'create')
            ->notEmptyString('flight1');

        $validator
            ->scalar('sector1')
            ->maxLength('sector1', 255)
            ->requirePresence('sector1', 'create')
            ->notEmptyString('sector1');

        $validator
            ->scalar('etd1')
            ->maxLength('etd1', 255)
            ->requirePresence('etd1', 'create')
            ->notEmptyString('etd1');

        $validator
            ->scalar('eta1')
            ->maxLength('eta1', 255)
            ->requirePresence('eta1', 'create')
            ->notEmptyString('eta1');

        $validator
            ->scalar('flight2')
            ->maxLength('flight2', 255)
            ->requirePresence('flight2', 'create')
            ->notEmptyString('flight2');

        $validator
            ->scalar('sector2')
            ->maxLength('sector2', 255)
            ->requirePresence('sector2', 'create')
            ->notEmptyString('sector2');

        $validator
            ->scalar('etd2')
            ->maxLength('etd2', 255)
            ->requirePresence('etd2', 'create')
            ->notEmptyString('etd2');

        $validator
            ->scalar('eta2')
            ->maxLength('eta2', 255)
            ->requirePresence('eta2', 'create')
            ->notEmptyString('eta2');

        $validator
            ->scalar('flight3')
            ->maxLength('flight3', 255)
            ->requirePresence('flight3', 'create')
            ->notEmptyString('flight3');

        $validator
            ->scalar('sector3')
            ->maxLength('sector3', 255)
            ->requirePresence('sector3', 'create')
            ->notEmptyString('sector3');

        $validator
            ->scalar('etd3')
            ->maxLength('etd3', 255)
            ->requirePresence('etd3', 'create')
            ->notEmptyString('etd3');

        $validator
            ->scalar('eta3')
            ->maxLength('eta3', 255)
            ->requirePresence('eta3', 'create')
            ->notEmptyString('eta3');

        $validator
            ->scalar('flight4')
            ->maxLength('flight4', 255)
            ->requirePresence('flight4', 'create')
            ->notEmptyString('flight4');

        $validator
            ->scalar('sector4')
            ->maxLength('sector4', 255)
            ->requirePresence('sector4', 'create')
            ->notEmptyString('sector4');

        $validator
            ->scalar('etd4')
            ->maxLength('etd4', 255)
            ->requirePresence('etd4', 'create')
            ->notEmptyString('etd4');

        $validator
            ->scalar('eta4')
            ->maxLength('eta4', 255)
            ->requirePresence('eta4', 'create')
            ->notEmptyString('eta4');

        return $validator;
    }

    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['tour_id'], 'Tour'), ['errorField' => 'tour_id']);

        return $rules;
    }
}
