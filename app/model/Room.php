<?php


namespace App\Model;


use Core\Model;

class Room extends Model
{
    function setTable()
    {
        return $this->tableName = 'room';
    }

    function fieldTable()
    {
        return [];
    }

    function getAll($data = [] , $limit = 0 , $offset = 0){

        return[
            'data' => $this->table($this->setTable())->whereLikes($data)->limit($limit,$offset)->orderBy('id')->all(),
            'total' => count($this->table($this->setTable())->whereLikes($data)->all())
        ];

    }

    function create($data){
        return $this->table($this->setTable())->insert($data);
    }

    public function findId($id){
        return $this->table($this->setTable())->where('id' ,'=' , $id)->find();
    }

    public  function updateRecord($column , $value , $data = [])
    {
        return $this->table($this->setTable())->update($column , $value , $data);
    }

    public  function deleteRecord($column , $value){
        return $this->table($this->setTable())->delete($column , $value);
    }
}