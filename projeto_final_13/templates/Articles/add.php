<!-- File: Templates/Articles/add.php -->
<h1>Adicionar jogador</h1>
<?php
echo $this->Form->create($article);
echo $this->Form->input('Nome');
echo $this->Form->input('Posicao');
echo $this->Form->input('body', ['rows' => '3']);
echo $this->Form->button(__('Salvar artigo'));
echo $this->Form->end();
?>