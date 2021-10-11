<?php

namespace Core;

use PDO;

trait QueryBuilder
{
    public $tableName = '';
    public $where = '';
    public $operator = '';
    public $selectField = '*';
    public $limit = '';
    public $orderBy = '';

    public function all()
    {
        $sql = $this->_genSql();
//        echo $sql . "<br>";
        $query = $this->query($sql);

        $this->_reset();

        if (empty($query)) {
            return false;
        }

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find()
    {
        $sql = $this->_genSql();
        $query = $this->_conn->prepare($sql);
        $query->execute();

        $this->_reset();

        if (empty($query)) {
            return false;
        }

        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function table($table)
    {
        $this->tableName = $table;
        return $this;
    }

    public function select($field = '*')
    {
        $this->selectField = $field;
        return $this;
    }

    public function limit($number, $offset = 0)
    {
        $this->limit = " LIMIT $offset, $number";
        return $this;
    }

    public function where($field, $compare, $value)
    {
        $this->operator = empty($this->where) ? " WHERE " : " AND ";
        $this->where .= "$this->operator $field $compare '$value'";
        return $this;
    }

    public function orWhere($field, $compare, $value)
    {
        $this->operator = empty($this->where) ? " WHERE " : " OR ";
        $this->where .= "$this->operator $field $compare '$value'";
        return $this;
    }

    public function whereLike($field, $value)
    {
        $this->operator = empty($this->where) ? " WHERE " : " AND ";
        $this->where .= "$this->operator $field LIKE '$value'";
        return $this;
    }



    public function whereLikes($data = [])
    {
        if(empty($data)){
            return $this;
        }

        foreach ($data as $key=>$value){
            $this->operator = empty($this->where) ? " WHERE " : " AND ";
            $this->where .= "$this->operator $key LIKE '%$value%'";
        }
        return $this;
    }

    public function orderBy($field, $type = "ASC")
    {
        if (is_array($field)) {
            $this->orderBy = " ORDER BY " . implode(' ', $field);
        } else {
            $this->orderBy = " ORDER BY $field $type";
        }

        return $this;
    }

    protected function _reset()
    {
        $this->tableName = '';
        $this->where = '';
        $this->operator = '';
        $this->selectField = '*';
        $this->limit = '';
        $this->orderBy = '';
    }

    protected function _genSql()
    {
        $sql = "SELECT $this->selectField FROM $this->tableName $this->where $this->orderBy $this->limit";
        return trim($sql);
    }
}

