<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ToursSettings Model
 *
 * @property \App\Model\Table\ToursTable&\Cake\ORM\Association\BelongsTo $Tours
 *
 * @method \App\Model\Entity\ToursSetting newEmptyEntity()
 * @method \App\Model\Entity\ToursSetting newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ToursSetting[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ToursSetting get($primaryKey, $options = [])
 * @method \App\Model\Entity\ToursSetting findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ToursSetting patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ToursSetting[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ToursSetting|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ToursSetting saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ToursSetting[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ToursSetting[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ToursSetting[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ToursSetting[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ToursSettingsTable extends Table
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

        $this->setTable('tours_settings');
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
