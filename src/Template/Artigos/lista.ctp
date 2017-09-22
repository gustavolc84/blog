<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
?>

<h1> Lista de Artigos </h1>
<div class = "body-component-left">
    <?= $this->Html->link('+ Novo', ['action' => 'adicionar']) ?>
    <table>
        <tr>
            <th> Id     </th>
            <th> Titúlo </th>
            <th> Criado </th>
            <th> Ações </th>
        </tr>    

        <?php foreach ($artigos as $art): ?>
        <tr>
            <td> <?= $art->id ?> </td>
            <td>
                <?= $this->Html->link( $art->titulo , ['action' => 'visualizar', $art->id] ) ?>
            </td>
            <td>
                <?= $art->criado->format('d/m/Y') /*->format(DATE_RFC850)*/ ?>
            </td>
            <td>
                <?= $this->Html->link('Editar' , ['action' => 'editar' , $art->id ] ) ?>
                <?= $this->Form->postLink('Excluir' , ['action' => 'excluir' , $art->id] , ['confirm' => 'Deseja excluir o artigo ' . $art->id . '?'] )?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>
