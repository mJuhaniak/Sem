<?php
declare(strict_types=1);

namespace App\Models;

class DbStorage extends AStorage
{
    private $user = 'root';
    private $pass = 'dtb456';
    private $db = 'blog';
    private $host = 'localhost';

    private PDO $pdo;

    /**
     * DbStorage constructor.
     */
    public function __construct()
    {
        $this->pdo = new PDO("mysql:dbname={$this->db};host=$this->host", $this->user, $this->pass,
                                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,]);
    }


    /**
     * @return Article[]
     */
    public function getAll() : array {
        $stmt = $this->pdo->query("SELECT * FROM articles");
        $articles=[];
        while ($row = $stmt->fetch()) {
            $article = new Article($row['title'], $row['text']);
            $articles[] = $article;
        }
        return $articles;
    }

    public function saveArticle(Article $article)
    {
        $stmt = $this->pdo->prepare("INSERT INTO articles (title, text) VALUES (?, ?)");
        $stmt->execute([$article->getTitle(), $article->getText()]);
    }
}