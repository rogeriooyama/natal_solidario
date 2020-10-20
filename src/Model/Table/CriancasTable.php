<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Criancas Model
 *
 * @method \App\Model\Entity\Crianca newEmptyEntity()
 * @method \App\Model\Entity\Crianca newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Crianca[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Crianca get($primaryKey, $options = [])
 * @method \App\Model\Entity\Crianca findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Crianca patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Crianca[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Crianca|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Crianca saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Crianca[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Crianca[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Crianca[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Crianca[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CriancasTable extends Table
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

        $this->setTable('criancas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->scalar('nome')
            ->maxLength('nome', 18, 'O primeiro nome da criança deverá ter 18 letras no máximo')
            ->requirePresence('nome', 'create')
            ->notEmptyString('nome', 'Preencha o nome da criança');

        $validator
            ->scalar('sobrenome')
            ->maxLength('sobrenome', 50)
            ->requirePresence('sobrenome', 'create')
            ->notEmptyString('sobrenome', 'Preencha o sobrenome da criança');

        $validator
            ->scalar('sexo')
            ->maxLength('sexo', 10)
            ->requirePresence('sexo', 'create')
            ->notEmptyString('sexo', 'Informe o sexo da criança');

        $validator
            ->scalar('idade')
            ->maxLength('idade', 3)
            ->requirePresence('idade', 'create')
            ->notEmptyString('idade', 'Informe a idade da criança')
            ->numeric('idade', 'Apenas números são permitidos');

        $validator
            ->scalar('nome_padrinho')
            ->maxLength('nome_padrinho', 100)
            ->notEmpty('nome_padrinho', 'Por favor, informe seu nome completo', function ($context) {
                return isset($context['data']['required']);
            });

        $validator
            ->scalar('tel_padrinho')
            ->maxLength('tel_padrinho', 50)
            ->notEmptyString('tel_padrinho', 'Por favor, informe seu telefone para contato', function ($context) {
                return isset($context['data']['required']);
            });

        $validator
            ->scalar('email_padrinho')
            ->maxLength('email_padrinho', 100)
            ->notEmptyString('email_padrinho', 'Por favor, informe seu email para contato', function ($context) {
                return isset($context['data']['required']);
            });

        $validator
            ->scalar('carta')
            ->maxLength('carta', 100)
            ->requirePresence('carta', 'create')
            ->notEmptyString('carta', 'Selecione um arquivo de imagem');

        $validator
            ->scalar('tamanho_roupa')
            ->maxLength('tamanho_roupa', 3)
            ->requirePresence('tamanho_roupa', 'create')
            ->notEmptyString('tamanho_roupa', 'Informe o tamanho da roupa')
            ->numeric('tamanho_roupa', 'Apenas números são permitidos');

        $validator
            ->scalar('tamanho_calca')
            ->maxLength('tamanho_calca', 3)
            ->requirePresence('tamanho_calca', 'create')
            ->notEmptyString('tamanho_calca', 'Informe o tamanho da roupa')
            ->numeric('tamanho_calca', 'Apenas números são permitidos');

        $validator
            ->scalar('tamanho_calcado')
            ->maxLength('tamanho_calcado', 3)
            ->requirePresence('tamanho_calcado', 'create')
            ->notEmptyString('tamanho_calcado', 'informe o tamanho do calçado')
            ->numeric('tamanho_calcado', 'Apenas números são permitidos');

        return $validator;
    }
}
