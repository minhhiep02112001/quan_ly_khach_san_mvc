<?php


namespace App\Model;


use Core\Model;

class OrderDetail extends Model
{

    function setTable()
    {
        return $this->tableName = 'order_detail';
    }

    function fieldTable()
    {
        return [];
    }

    function getAllFindOrder($order_id){
        return $this->table($this->setTable())->where('order_id', '=', $order_id)->all();
    }

    public function joinRoomID( $where = '')
    {
        return $this->selectLeftJoin('room' , ' room.id = order_detail.room_id' , $where);

    }
}