<?php /** @var Array $data */ ?>

<h2>Clanky</h2>

<a href="?c=reservation&a=add" class="btn btn-primary">Pridaj clanok</a>

<?php
/** @var \App\Models\Article $article */
foreach ($data['articles'] as $article) {
?>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><?=$article->getTitle()?></h5>
            <a href="?c=reservation&a=edit&id=<?=$article->getId()?>" class="btn btn-primary btn-sm">Edit</a>
            <a href="?c=reservation&a=delete&id=<?=$article->getId()?>" class="btn btn-danger btn-sm">Zmazať</a>
            <p class="card-text"><?=$article->getText()?></p>
        </div>
    </div>

<?php }
?>
