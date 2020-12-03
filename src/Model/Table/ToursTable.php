<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tours Model
 *
 * @property \App\Model\Table\ToursFlightTable&\Cake\ORM\Association\HasMany $ToursFlight
 * @property \App\Model\Table\ToursPriceTable&\Cake\ORM\Association\HasMany $ToursPrice
 * @property \App\Model\Table\ToursSettingsTable&\Cake\ORM\Association\HasMany $ToursSettings
 *
 * @method \App\Model\Entity\Tour newEmptyEntity()
 * @method \App\Model\Entity\Tour newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Tour[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tour get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tour findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Tour patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tour[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tour|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tour saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tour[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Tour[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Tour[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Tour[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ToursTable extends Table
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

        $this->setTable('tours');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('ToursFlight', [
            'foreignKey' => 'tour_id',
        ]);
        $this->hasMany('ToursPrice', [
            'foreignKey' => 'tour_id',
        ]);
        $this->hasMany('ToursSettings', [
            'foreignKey' => 'tour_id',
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
