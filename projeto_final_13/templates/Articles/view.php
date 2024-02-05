<html></html>
<!-- File: Templates/Articles/view.php -->
<h1><?= h($article->Nome) ?></h1>
<h1><?= h($article->Posição) ?></h1>
<p><?= h($article->body) ?></p>
<p><small>Criado: <?= $article->created->format(DATE_RFC850) ?></small></p>
</html>