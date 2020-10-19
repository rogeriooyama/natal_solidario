<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Crianca Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $sobrenome
 * @property string $sexo
 * @property string $idade
 * @property string $observacoes
 * @property string $nome_padrinho
 * @property string $tel_padrinho
 * @property string $email_padrinho
 * @property int $status
 */
class Crianca extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'nome' => true,
        'sobrenome' => true,
        'sexo' => true,
        'idade' => true,
        'observacoes' => true,
        'nome_padrinho' => true,
        'tel_padrinho' => true,
        'email_padrinho' => true,
        'status' => true,
        'carta' => true,
        'tamanho_roupa' => true,
        'tamanho_calca' => true,
        'tamanho_calcado' => true,
    ];
}
