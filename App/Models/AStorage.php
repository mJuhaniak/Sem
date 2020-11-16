<?php
declare(strict_types=1);

namespace App\Models;

abstract class AStorage
{
    public abstract function getAll() : array;

    public abstract function saveArticle(Article $article);

    public function createPost(string $title, string $text)
    {
        $article = new Article($title, $text);
        $this->saveArticle($article);
    }
}