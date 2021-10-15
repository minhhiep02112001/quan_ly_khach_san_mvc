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

    function getAll($data = [] , $limit = 0 , $offset = 0){
        return[
            'data' => $this->table($this->setTable())->whereLikes($data)->orderBy('id' , 'desc')->limit($limit,$offset)->all(),
            'total' => count($this->table($this->setTable())->whereLikes($data)->all())
        ];

    }

    function create($data){
        return $this->table($this->setTable())->insertLastID($data);
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

    public function  getListOrderDetail($order_id){
        $sql = "SELECT  room.title ,  room.slug ,  room.price as 'room_price' ,  room.image , order_detail.price ,  order_detail.count_people as 'order_people' FROM order_detail JOIN room ON order_detail.room_id = room.id WHERE  order_id = $order_id";
        $query = $this->_db->query($sql);

        if (empty($query)) {
            return false;
        }
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getUserOrder($user_id){
        return $this->table( 'user')->where('id' , '=' , $user_id)->find();
    }
}