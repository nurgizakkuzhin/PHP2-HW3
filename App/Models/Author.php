<?php


namespace App\Models;


use App\Classes\AbstractModel;

/**
 * Class Author
 * @package App\Models
 * @property int $id;
 * @property string $name;
 */
class Author extends AbstractModel
{

    public $name;

    protected const TABLE = 'authors';

}