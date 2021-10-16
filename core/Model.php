<?php

namespace Core;

use PDO;

abstract class Model extends Database
{
    protected $_db;

    public function __construct()
    {
        $this->_db = new Database();
        parent::__construct();
    }

    abstract function setTable();
    abstract function fieldTable();

    public function getList()
    {
        $selectFiled = empty($this->fieldTable()) ? "*" : $this->fieldTable();
        $sql = "SELECT $selectFiled FROM " . $this->setTable();
        $query = $this->_db->query($sql);
        if (empty($query)) {
            return false;
        }
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function first()
    {
        $selectFiled = empty($this->fieldTable()) ? "*" : $this->fieldTable();
        $sql = "SELECT $selectFiled FROM " . $this->setTable();
        $query = $this->_db->query($sql);
        if (empty($query)) {
            return false;
        }
        return $query->fetch(PDO::FETCH_ASSOC);
    }


    public function insertLastID( $data=[]) // return id
    {
        try {
            $arr_key = array_keys($data);
            $param = implode(",", $arr_key); //(firstname, lastname, email)
            $arr_value = [];
            foreach ($data as $key=> $val){
                $arr_value[":$key"] = $val;
            }
            $parameter = implode(",", array_keys($arr_value));
            $sql = "INSERT INTO {$this->setTable()} ($param) VALUES ($parameter)";

            $stmt =  $this->_conn->prepare($sql);
            $stmt->execute($arr_value);
            return $this->_conn->lastInsertId();
        } catch(\PDOException $e) {
            return false;
        }
    }

    public function insert( $data=[]) // return records
    {
        try {
            $arr_key = array_keys($data);

            $param = implode(",", $arr_key); //(firstname, lastname, email)

            $arr_value = [];
            foreach ($data as $key=> $val){
                $arr_value[":$key"] = $val;
            }
            $parameter = implode(",", array_keys($arr_value));
            $sql = "INSERT INTO {$this->setTable()} ($param) VALUES ($parameter)";

            $stmt =  $this->_conn->prepare($sql);
            $stmt->execute($arr_value);
            $id = $this->_conn->lastInsertId();
            return $this->table($this->setTable())->where('id',' = ',$id)->find();
        } catch (\PDOException $e) {
            return false;
        }
    }
    public function update( $column , $value ,$data = [])
    {
        try {
            //"Update table set firstname=:firstname , lastname = :lastname VALUES $column = $value;
            $str_param = "";
            $arr_value = [];
            foreach ($data as $key=> $val){
                $str_param .= " $key=:$key ,";
                $arr_value[":$key"] = $val;
            }
            $str_param = trim($str_param,',');
            $sql = "UPDATE {$this->setTable()} set  $str_param  where $column = '$value'";
            $stmt = $this->_conn->prepare($sql);
            $stmt->execute($arr_value);
            return true;
            //Thực hiện đoạn mã này có khả năng ném ra một ngoại lệ
        }
        catch (\PDOException $e) {
            //Xử lý ngoại lệ ở đây
            return false;
        }
    }

    public function delete($column , $value){
        try{
            $sql = "DELETE FROM {$this->setTable()} where $column = '$value'";
            $this->_conn->exec($sql);
            return true;
        }catch (\PDOException $e){
            return false;
        }
    }

    public  function selectLeftJoin ($table , $on , $where = ''){
        $selectFiled = empty($this->fieldTable()) ? "*" : $this->fieldTable();
        $where = ($where != '') ? "Where $where" :'';
        $sql = "SELECT $selectFiled FROM " . $this->setTable() . "LEFTJOIN $table ON $on $where ";
        $query = $this->_db->query($sql);
        if (empty($query)) {
            return false;
        }
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

}

