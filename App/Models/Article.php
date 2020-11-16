<?php
declare(strict_types=1);
namespace App\Models;
use App\Core\Model;
class Article extends Model
{
    protected $id;
    protected ?string $title;
    protected ?string $text;
    /**
     * Article constructor.
     * @param string $title
     * @param string $text
     */
    public function __construct(?string $title = null, ?string $text = null)
    {
        $this->title = $title;
        $this->text = $text;
    }

    public function getId()
    {
        return $this->id;
    }
    /**
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
    /**
     * @param string $title
     */
    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }
    /**
     * @return string
     */
    public function getText(): ?string
    {
        return $this->text;
    }
    /**
     * @param string $text
     */
    public function setText(?string $text): void
    {
        $this->text = $text;
    }

    static public function setDbColumns()
    {
        return ['id', 'title', 'text'];
    }
    static public function setTableName()
    {
        return 'articles';
    }
}