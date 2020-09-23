<?php


namespace App\Classes;


use App\TSingleton;

class Config
{
    use TSingleton;

    public $data = [];

    protected function __construct()
    {
        $this->data = include __DIR__ . '/../../config.php';
    }
}