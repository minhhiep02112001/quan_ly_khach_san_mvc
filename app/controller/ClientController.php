<?php
namespace App\Controller;

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
        $this->render("detailRoom" , [
            'room'=>$room
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
            (SELECT id from orders WHERE  '$start' < `start` AND '$end' > `end`));";
        echo $sql;
        exit();
        $data = $this->_db->query($sql)->fetchAll(\PDO::FETCH_ASSOC);
        print_r($data);
        exit();
        $this->render("search" , []);
    }
}