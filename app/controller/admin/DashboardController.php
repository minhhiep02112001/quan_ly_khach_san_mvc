<?php


namespace App\Controller\Admin;


use Core\Controller;
use Core\Database;

class DashboardController extends Controller
{
    private  $_db ;
    public function __construct()
    {
        if(!isset($_SESSION['admin.login'])){
            header("Location:/admin/login");
            exit();
        }
        $this->_db = new Database();
    }

    function index(){
        $data['countUser'] = count($this->_db->table('user')->all());
        $data['countCustomer'] = count($this->_db->table('customer')->all());
        $data['countArticle'] = count($this->_db->table('article')->all());
        $data['countRoom'] = count($this->_db->table('room')->all());
        $data['countOrder'] = count($this->_db->table('orders')->where('status' , '=' ,0)->all());
        $data['countOrderSuccess'] = count($this->_db->table('orders')->where('status' , '=' ,1)->all());
        $data['countOrderPaid'] = count($this->_db->table('orders')->where('status' , '=' ,2)->all());
        $data['countOrderCancel'] = count($this->_db->table('orders')->where('status' , '>=' ,3)->all());

        $this->render('admin/__index',[
            'page'=>'dashboard/index',
            'data'=>$data
        ]);
    }

}