<?php


namespace App\Controller\Admin;


use Core\Controller;
use Core\Database;

class DashboardController extends Controller
{
    private $_db;

    public function __construct()
    {
        if (!isset($_SESSION['admin.login'])) {
            header("Location:". WEB_ROOT."/admin/login");
            exit();
        }
        $this->_db = new Database();
    }

    function index()
    {

        $data['countUser'] = count($this->_db->table('user')->all());
        $data['countCustomer'] = count($this->_db->table('customer')->all());
        $data['countArticle'] = count($this->_db->table('article')->all());
        $data['countRoom'] = count($this->_db->table('room')->all());
        $data['countOrder'] = count($this->_db->table('orders')->where('status', '=', 0)->all());
        $data['countOrderSuccess'] = count($this->_db->table('orders')->where('status', '=', 1)->all());
        $data['countOrderPaid'] = count($this->_db->table('orders')->where('status', '=', 2)->all());
        $data['countOrderCancel'] = count($this->_db->table('orders')->where('status', '>=', 3)->all());

        $this->render('admin/index', [
            'page' => 'dashboard/index',
            'data' => $data,
            'js' => 'chart.js'
        ]);
    }

    public function chart()
    {
        $date = date('d/m/Y');
        $start_day = $_POST['start_day'] ?? $date;
        $end_day = $_POST['end_day'] ?? $date;

        $sql = "SELECT orders.status , COUNT(orders.total) AS 'sum_records' , SUM(orders.total) AS 'sum_price' 
        FROM orders WHERE orders.created_at BETWEEN '$start_day' AND '$end_day' 
        GROUP BY orders.status ORDER  BY orders.status ASC";

        $data = $this->_db->query($sql)->fetchAll(\PDO::FETCH_ASSOC);
        $data_status = array_column($data, 'status');

        for ($i = 0; $i < 5; $i++) { // bổ xung status còn thiếu
            if (!in_array($i, $data_status)) {
                $arr = [
                    'status' => $i,
                    'sum_records' => 0,
                    'sum_price' => 0
                ];
                array_push($data, $arr);
            }
        }

        $volume = array_column($data, 'status');

        array_multisort($volume, SORT_ASC, $data);

        echo json_encode($data);
    }
}