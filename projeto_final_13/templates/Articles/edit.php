<html>
<!-- File: Templates/Articles/edit.php -->
<h1>Editar Jogador</h1>
<?php
echo $this->Form->create($article);
echo $this->Form->input('Nome');
echo $this->Form->input('Posicao');
echo $this->Form->input('body', ['rows' => '3']);
echo $this->Form->button(__('Salvar Jogador')); echo $this->Form->end();
?>
</html>
