<?php


namespace App\Classes;


class Db
{
    protected $dbh;

    public function __construct()
    {
        $config = (Config::instance()->data)['db'];
        $dsn = 'mysql:host=' . $config['host'] .';dbname=' . $config['dbname'];
        $this->dbh = new \PDO($dsn, $config['user'], $config['password']);
    }

    public function query($sql, array $params = [], $class = 'stdClass'): array
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($params);
        return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
    }

    public function execute($sql, array $params = []): bool
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute($params);
    }

    public function lastIdInsert()
    {
        return $this->dbh->lastInsertId();
    }
}