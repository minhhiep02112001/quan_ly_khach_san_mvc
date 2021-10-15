<?php


namespace App\Model;


use Core\Model;

class Payment extends Model
{
    function setTable()
    {
        return $this->tableName = 'payment';
    }

    function fieldTable()
    {
        return [];
    }

    function getAll($data = [], $limit = 0, $offset = 0)
    {
        return [
            'data' => $this->table($this->setTable())->whereLikes($data)->orderBy('id', 'desc')->limit($limit, $offset)->all(),
            'total' => count($this->table($this->setTable())->whereLikes($data)->all())
        ];

    }

    function create($data)
    {
        return $this->table($this->setTable())->insertLastID($data);
    }

}