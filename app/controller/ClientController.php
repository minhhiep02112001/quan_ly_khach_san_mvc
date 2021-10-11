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
}