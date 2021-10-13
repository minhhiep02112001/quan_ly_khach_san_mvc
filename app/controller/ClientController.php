<?php
namespace App\Controller;

use App\Model\Order;
use Core\Controller;
use Core\Database;

class ClientController extends  Controller
{
    private $_db;
    public function __construct()
    {
        $this->_db = new Database();
    }

    public function home(){
        $listRoom = $this->_db->table('room')->where('active' , '=' , 1)->orderBy('id' , 'desc')->all();
        $listArticle = $this->_db->table('article')->where('active' , '=' , 1)->orderBy('id' , 'desc')->all();
        $this->render("home" , [
            'listRoom'=>$listRoom,
            'listArticle' => $listArticle
        ]);
    }

    public function detailRoom($id){
        $room = $this->_db->table('room')->where('id' ,'=' , $id)->find();
        $nextThirtyDay = date('Y-m-d' , strtotime('+30 days'));

        $sql = "SELECT  orders.`start` , orders.`end`    
                FROM orders RIGHT JOIN order_detail ON orders.ID = order_detail.order_id 
                WHERE order_detail.room_id = $id  AND ( NOW() < orders.`end` AND orders.`end` < '$nextThirtyDay' )";

        $bookedDate = $this->_db->table('orders')->query($sql)->fetchAll(\PDO::FETCH_ASSOC);

        $this->render("detailRoom" , [
            'room'=>$room,
            'bookedDate'=>$bookedDate
        ]);
    }

    public function detailArticle($id){
        $article = $this->_db->table('article')->where('id' ,'=' , $id)->find();
        $this->render("detailArticle" , [
            'article'=>$article
        ]);
    }

    public  function search(){
        try{
            $start = \DateTime::createFromFormat('d/m/Y',$_GET['start'])->format('Y-m-d');
            $end = \DateTime::createFromFormat('d/m/Y',$_GET['end'])->format('Y-m-d');
        }catch (\Throwable $e){
            $start=$start ?? '';
            $end = $end ?? '';
        }
        $sql = "SELECT * FROM room WHERE id not in (
            SELECT room_id from order_detail WHERE order_id in 
            (SELECT id from orders WHERE (start <= '$start' and end >= '$start') or (start <= '$end' and end >= '$end')));";

        $data = $this->_db->query($sql)->fetchAll(\PDO::FETCH_ASSOC);

        $this->render("search" , [
            'data'=>$data
        ]);
    }

    public function updateStatusOrder($id){
        if(!isset($_SESSION['user.login'])){
            header("Location:/login");
        }
        $db_order = $this->model('Order');
        $order = $this->_db->table('orders')->where('id' , '=' , $id)->find();
        if(!$order){
            return loadError();
        }

        $record = $db_order->update('id' , $id ,[
           'status' => 4,
           'contents' => $_POST['content']
        ]);

        $_SESSION['success'] = [ 'status' => 'Success !!!' ];

        header("Location:{$_SERVER['HTTP_REFERER']}");
        exit();
    }

}