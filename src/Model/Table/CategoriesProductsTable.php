<?php
namespace Stock\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CategoriesProducts Model
 *
 * @property \Stock\Model\Table\CategoriesTable|\Cake\ORM\Association\BelongsTo $Categories
 * @property \Stock\Model\Table\ProductsTable|\Cake\ORM\Association\BelongsTo $Products
 *
 * @method \Stock\Model\Entity\CategoriesProduct get($primaryKey, $options = [])
 * @method \Stock\Model\Entity\CategoriesProduct newEntity($data = null, array $options = [])
 * @method \Stock\Model\Entity\CategoriesProduct[] newEntities(array $data, array $options = [])
 * @method \Stock\Model\Entity\CategoriesProduct|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Stock\Model\Entity\CategoriesProduct patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Stock\Model\Entity\CategoriesProduct[] patchEntities($entities, array $data, array $options = [])
 * @method \Stock\Model\Entity\CategoriesProduct findOrCreate($search, callable $callback = null, $options = [])
 */
class CategoriesProductsTable extends Table
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

        $this->setTable('categories_products');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Stock.Categories', [
            'foreignKey' => 'category_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Stock.Products', [
            'foreignKey' => 'product_id',
            'joinType' => 'INNER'
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

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['category_id'], 'Categories'));
        $rules->add($rules->existsIn(['product_id'], 'Products'));

        return $rules;
    }
}
