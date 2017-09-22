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

<div class = "body-component-left">
    <h1> Visualizar Artigos </h1>
    <hr>
    <?php if(is_null($artigo)): ?>
    	<h2> Não existe registros </h2>
    <?php else: ?>
    	<h2> Título: <?= $artigo->titulo ?></h2>
	    <p> <?= $artigo->corpo ?></p>
	    <p> <?= $artigo->criado->format('d/m/Y') ?></p>
	    <?= $this->Html->link('Voltar' , ['action' => 'lista']) ?>
    <?php endif; ?>
</div>