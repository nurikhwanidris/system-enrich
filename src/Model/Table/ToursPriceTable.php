<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ToursPrice Model
 *
 * @property \App\Model\Table\ToursTable&\Cake\ORM\Association\BelongsTo $Tours
 *
 * @method \App\Model\Entity\ToursPrice newEmptyEntity()
 * @method \App\Model\Entity\ToursPrice newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ToursPrice[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ToursPrice get($primaryKey, $options = [])
 * @method \App\Model\Entity\ToursPrice findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ToursPrice patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ToursPrice[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ToursPrice|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ToursPrice saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ToursPrice[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ToursPrice[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ToursPrice[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ToursPrice[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ToursPriceTable extends Table
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

        $this->setTable('tours_price');
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
