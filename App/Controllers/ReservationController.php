<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Models\Article;
use App\Models\CsvStorage;

class ReservationController extends AControllerBase
{
    public function index()
    {
        return ['name' => 'Rezervacie', 'info' => 'textRezervacie',
                'articles' => Article::getAll()];
    }

    public function add()
    {
        if (isset($_POST['title'])) {
            $article = new Article($_POST['title'], $_POST['text']);
            $article->save();
            header("Location: ?c=reservation");
        }
        return ['name' => 'Rezervacie', 'info' => 'textRezervacie'];
    }

    public function edit()
    {
        {
            $id = $_GET['id'];
            $article = new Article();
            $article->getOne($id);

            if (isset($_POST['title'])) {
                $article->setText($_POST['text']);
                $article->setTitle($_POST['title']);
                $article->save();
                header("Location: ?c=reservation");
            }

            return ['name' => 'Rezervacie', 'info' => 'textRezervacie',
                    'article' => $article];
        }
    }

    public function delete()
    {
        $id = $_GET['id'];
        $article = new Article();
        $article->getOne($id);
        $article->delete();
        header("Location: ?c=reservation");

        exit();
    }
}