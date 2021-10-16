<?php


namespace App\Model;


use Core\Model;
use PDO;

class Order extends  Model
{
    function setTable()
    {
        return $this->tableName = 'orders';
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

    public function  getOrderDetail($order_id){
        $sql = "SELECT orders.`code`, orders.`user_id`, orders.`room_id`, orders.`name`, orders.`email`, orders.`phone`, orders.`price_room`,
                orders.`count_people`, orders.`total`, orders.`status`, orders.`start`, orders.`end`, orders.`sum_day`, orders.`contents`, 
                orders.`payment`, orders.`created_at` , room.`title`, room.`image` FROM orders  
                LEFT JOIN room ON orders.room_id = room.id  
                WHERE orders.id = $order_id";

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