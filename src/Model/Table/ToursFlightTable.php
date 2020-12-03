<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ToursFlight Model
 *
 * @property \App\Model\Table\ToursTable&\Cake\ORM\Association\BelongsTo $Tours
 *
 * @method \App\Model\Entity\ToursFlight newEmptyEntity()
 * @method \App\Model\Entity\ToursFlight newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ToursFlight[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ToursFlight get($primaryKey, $options = [])
 * @method \App\Model\Entity\ToursFlight findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ToursFlight patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ToursFlight[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ToursFlight|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ToursFlight saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ToursFlight[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ToursFlight[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ToursFlight[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ToursFlight[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ToursFlightTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('tours_flight');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Tours', [
            'foreignKey' => 'tour_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
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

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['tour_id'], 'Tours'), ['errorField' => 'tour_id']);

        return $rules;
    }
}
