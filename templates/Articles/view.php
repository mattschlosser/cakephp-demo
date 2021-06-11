<!-- File: templates/Articles/view.php -->

<h1><?= h($article->title) ?></h1>
<p class='prewrap'><?= h($article->body) ?></p>
<p><small>Created: <?= $article->created->format(DATE_RFC850) ?></small></p>
<p><?= $this->Html->link('Edit', ['action' => 'edit', $article->slug]) ?></p>
<Style>
.prewrap {
    white-space: pre-wrap;
}
</Style>