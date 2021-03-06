<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Categoria Entity
 *
 * @property int $id
 * @property int $id_pai
 * @property string $nome
 * @property string $descricao
 * @property int $esq
 * @property int $dir
 *
 * @property \App\Model\Entity\Pai $pai
 * @property \App\Model\Entity\Artigo[] $artigos
 */
class Categoria extends Entity
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
        '*' => true,
        'id' => false
    ];
}
