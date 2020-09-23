<?php


namespace App\Classes;



abstract class AbstractModel
{

    public $id;
    protected const TABLE = '';

    public static function findAll()
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE;
        return $db->query($sql, [], static::class);
    }

    public static function findById($id)
    {
        $db = new Db();
        $sql = 'SELECT * FROM '. static::TABLE. ' WHERE id=:id';
        $res = $db->query($sql, [':id'=> $id], static::class);
        return $res[0];
    }

    protected function insert()
    {
        $data = get_object_vars($this);
        $columns = [];
        $bindValue = [];
        foreach ($data as $key => $value) {
            if ('id' == $key) {
                continue;
            }
            $columns[] = $key;
            $bindValue[':' . $key] = $value;
        }

        //'INSERT INTO table (title, content) VALUES (:title, :content)'
        $sql = 'INSERT INTO ' . static::TABLE . '
                (' . implode(', ', $columns) . ') 
                VALUES 
                (' . implode(', ', array_keys($bindValue)). ')';
        $db = new Db();
        $db->execute($sql, $bindValue);
        $this->id = $db->lastIdInsert();
    }

    protected function update()
    {
        $data = get_object_vars($this);
        $columns = [];
        $bindValue = [];
        foreach ($data as $key => $value) {
            $bindValue[':' . $key] = $value;
            if ('id' == $key) {
                continue;
            }
            $columns[] = $key . '=:' . $key;
        }
        // 'UPDATE table SET title=:title, content=:content WHERE id=:id'
        $sql = 'UPDATE ' . static::TABLE . ' 
                SET ' . implode(', ', $columns) . ' 
                WHERE id=:id';
        $db = new Db();
        $db->execute($sql, $bindValue);
    }

    public function delete()
    {
        $sql = 'DELETE FROM ' . static::TABLE . ' WHERE id=:id';
        $db = new Db();
        $res = $db->execute($sql, [':id' => $this->id]);
        if ($res) {
            return true;
        } else {
            return false;
        }
    }

    public function save()
    {
        if (empty($this->id)) {
            $this->insert();
        } else {
            $this->update();
        }
    }
}