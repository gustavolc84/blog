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

<h1> Adicionar Artigos </h1>

<div class = "body-component-left">
<?php    
    echo $this->Form->create($artigo);
    echo $this->Form->input('titulo');    
    echo $this->Form->input('corpo', ['rows' => '3']);
    echo $this->Form->input('criado');
    echo $this->Form->input('categoria_id');
    echo $this->Form->button(__('Salvar'));
    echo $this->Form->end();
?>
</div>
