<?php


namespace App\Models;


use App\Classes\AbstractModel;
use App\Classes\Db;


/**
 * Class Article
 * @property int $id;
 * @property string $title;
 * @property string $content;
 * @property int $author_id;
 */
class Article extends AbstractModel
{
    protected const TABLE = 'news';

    public $title;
    public $content;
    public int $author_id;

    public function __get($name)
    {
        switch ($name) {
            case 'author' :
                return Author::findById($this->author_id);
                break;
            default:
                return null;
        }
    }

    public function __set($name, $value)
    {
        if ('author' === $name && $value instanceof Author) {
            $this->author_id = $value->id;
        }
    }

    public function __isset($name)
    {
        if ('author' === $name) {
            return isset($this->author_id);
        }
    }

    public static function LastThreeNews()
    {
        $sql = 'SELECT * FROM news ORDER BY id DESC LIMIT 3';
        $db = new Db();
        return $db->query($sql);
    }
}