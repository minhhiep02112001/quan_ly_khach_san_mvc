<?php


namespace App\Controller\Admin;


use App\Model\Order_detail;
use Core\Controller;
use Core\Pagination;

class OrderController extends Controller
{
    private $_config;
    protected $_db;
    private $_db_order_detail;

    public function __construct()
    {
        global $config;
        if (!isset($_SESSION['admin.login'])) {
            header("Location:/admin/login");
            exit();
        }
        $this->_config = $config;
        $this->_db = $this->model('Order');
        $this->_db_order_detail = $this->model('Order_detail');
    }

    function index()
    {
        $page = ($_REQUEST['page']) ?? 1;
        $limit = $this->_config['pagination']['limit'];
        $start = ($page - 1) * $limit;
        unset($_REQUEST['page']);

        $data_search = []; /// tìm kiếm
        if (count($_REQUEST) > 0) {
            $url_param = ""; /// parameter url pagination
            foreach ($_REQUEST as $key => $value) {
                if (empty($value)) {
                    continue;
                }
                $data_search[$key] = $value;
                $url_param .= "&{$key}={$value}";
            }
        }

        $data = $this->_db->getAll($data_search, $limit, $start);

        $config = [
            'total' => $data['total'] ?? 0,
            'limit' => $limit,
            'url' => './admin/order',
            'full' => false, //bỏ qua nếu không muốn hiển thị full page
            'param' => $url_param ?? ""
        ];

        $page = new Pagination($config);


        $this->render('admin/index', [
            'page' => 'order/index',
            'orders' => $data['data'],
            'paginate' => $page,
            'start' => $start
        ]);
    }

    public function show($id)
    {
        $order = $this->_db->findId($id);
        if (!$order) {
            return loadError();
        }
        $order_details = $this->_db->getListOrderDetail($id);
        $order_user = $this->_db->getUserOrder($order['user_id']);

        $this->render('admin/index', [
            'page' => 'order/show',
            'order' => $order,
            'order_details' => $order_details,
            'order_user' => $order_user,
            'js' => 'invoice.js',
        ]);
    }

    public function update($id)
    {
        $order = $this->_db->findId($id);
        if (!$order) {
            return loadError();
        }
        $data['status'] = $_POST['status'];
        if (!empty($_POST['content'])) {
            $data['contents'] = $_POST['content'];
        }

        $record = $this->_db->updateRecord('id', $id, $data);

        $_SESSION['success'] = ['status' => 'Success !!!'];
        header("Location:/admin/order");
        exit();
    }

}