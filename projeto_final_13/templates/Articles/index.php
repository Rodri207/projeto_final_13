<html></html>
<!-- File: Templates/Articles/index.php (delete links added) -->
<h1>Jogadores</h1>
<p><?= $this->Html->link('Adicionar artigo', ['action' => 'add']) ?></p>

<table>
<tr>
<th>Id</th>
<th>Nome</th>
<th>Posição</th>
<th>Nasceu</th>
<th>Ações</th> </tr>
<!-- Aqui é onde iremos iterar nosso objeto de solicitação $articles, exibindo informações de artigos -->
<?php foreach ($articles as $article): ?>
<tr>
<td><?= $article->id ?></td>
<td> <?= $this->Html->link($article->Nome, ['action' => 'view', $article->id]) ?> </td>
<td> <?= $this->Html->link($article->Posicao, ['action' => 'view', $article->id]) ?> </td>
<td> <?= $article->created->format(DATE_RFC850) ?> </td>
<td>
<?= $this->Form->postLink( 'Excluir', ['action' => 'delete', $article->id], ['confirm' => 'Tem certeza?']) ?>
<?= $this->Html->link(' Alterar', ['action' => 'edit', $article->id]) ?>
</td>
</tr>
<?php endforeach; ?>
</table>
</html>
