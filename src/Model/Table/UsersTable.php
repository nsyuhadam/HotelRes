<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 */
class UsersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('userId');
        $this->setPrimaryKey('userId');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('userId')
            ->allowEmpty('userId', 'create');

        $validator
            ->scalar('userPassword')
            ->maxLength('userPassword', 255)
            ->requirePresence('userPassword', 'create')
            ->notEmpty('userPassword');

        $validator
            ->scalar('userNoPhone')
            ->maxLength('userNoPhone', 50)
            ->requirePresence('userNoPhone', 'create')
            ->notEmpty('userNoPhone');

        $validator
            ->scalar('userFname')
            ->maxLength('userFname', 50)
            ->requirePresence('userFname', 'create')
            ->notEmpty('userFname');

        $validator
            ->scalar('userLName')
            ->maxLength('userLName', 50)
            ->requirePresence('userLName', 'create')
            ->notEmpty('userLName');

        $validator
            ->scalar('userEmail')
            ->maxLength('userEmail', 50)
            ->requirePresence('userEmail', 'create')
            ->notEmpty('userEmail');

        $validator
            ->integer('userRole')
            ->requirePresence('userRole', 'create')
            ->notEmpty('userRole');

        $validator
            ->integer('bookId')
            ->requirePresence('bookId', 'create')
            ->notEmpty('bookId');

        return $validator;
    }
}
