<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Categorias Model
 *
 * @property \App\Model\Table\ArtigosTable|\Cake\ORM\Association\HasMany $Artigos
 *
 * @method \App\Model\Entity\Categoria get($primaryKey, $options = [])
 * @method \App\Model\Entity\Categoria newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Categoria[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Categoria|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Categoria patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Categoria[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Categoria findOrCreate($search, callable $callback = null, $options = [])
 */
class CategoriasTable extends Table
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

        $this->setTable('categorias');
        $this->setDisplayField('nome');
        $this->setPrimaryKey('id');

        $this->hasMany('Artigos', [
            'foreignKey' => 'categoria_id'
        ]);
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->integer('id_pai')
            ->allowEmpty('id_pai');

        $validator
            ->scalar('nome')
            ->allowEmpty('nome');

        $validator
            ->scalar('descricao')
            ->allowEmpty('descricao');

        $validator
            ->integer('esq')
            ->allowEmpty('esq');

        $validator
            ->integer('dir')
            ->allowEmpty('dir');

        return $validator;
    }
}
