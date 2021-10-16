<?php


namespace App\Controller\Admin;


use App\Model\Order_detail;
use Core\Controller;
use Core\Database;
use Core\Pagination;
use Core\Request;

class OrderController extends Controller
{
    private $_config;
    protected $_db;
    private $_database;

    public function __construct()
    {
        global $config;
        if (!isset($_SESSION['admin.login'])) {
            header("Location:" . WEB_ROOT . "/admin/login");
            exit();
        }
        $this->_config = $config;
        $this->_db = $this->model('Order');
        $this->_database = new Database();
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

    public function create()
    {
        $rooms = $this->_database->table('room')->where('active', '=', 1)->all();
        $users = $this->_database->table('user')->where('active', '=', 1)->all();

        $this->render('admin/index', [
            'page' => 'order/create',
            'js' => 'order_create.js',
            'rooms' => $rooms,
            'users' => $users
        ]);
    }

    public  function  store(){
        $request = new Request();

        if (isset($_POST['check_user'])){
            $arrValidate['name'] = 'required';
            $arrValidate['email'] = 'required|email|unique:user,email';
            $arrValidate['phone'] = 'required|regex:/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/|unique:user,phone';
        }

        $request->rule($arrValidate??[]);

        $request->message([
            'name.required' => "Họ tên không được để trống !!!",
            'email.required' => "Email không được để trống !!!",
            'email.email' => "Email không hợp lệ!!!",
            'email.unique' => "Email đã tồn tại !!!",
            'phone.unique' => "Số điện thoại đã tồn tại !!!",
            'phone.required' => "Số điện thoại không được để trống !!!",
            'phone.regex' => "Số điện thoại không hợp lệ !!!",
        ]);

        $validate = $request->validate();

        if (!$validate) {
            foreach ($request->errors() as $key) {
                $error[] = reset($key);
            }
            $errors = [];
            $errors['old'] = $request->getParams();
            $errors['error'] = $error;
            $_SESSION['validate_data'] = $errors;
            header("Location:{$_SERVER["HTTP_REFERER"]}");
            exit();
        }

        $room = $this->_database->table('room')->where('id' , '=' , $_POST['room_id'])->find();

        if ( $_POST['count_people'] > $room['count_people']  ) {
            $errors = [];
            $errors['old'] = $request->getParams();
            $errors['error'] = ['error_count' => "Số người đặt phòng không hợp lệ"];

            $_SESSION['validate_data'] = $errors;
            header("Location:{$_SERVER["HTTP_REFERER"]}");
            exit();
        }

        $arrDate = explode( '-' , $_POST['start_end']);

        $start = date_create(trim($arrDate[0]));
        $end = date_create(trim($arrDate[1]));
        $diff = date_diff($start, $end);
        $count_day = $diff->days + 1;

        $sql = "SELECT room.id FROM room WHERE id not in  (SELECT orders.room_id from orders WHERE ((start <= '{$start->format('Y-m-d')}' and end >= '{$start->format('Y-m-d')}') 
            or (start <= '{$end->format('Y-m-d')}' and end >= '{$end->format('Y-m-d')}'))
            AND orders.`status` IN (0,1,2) );";

        $data = $this->_db->query($sql)->fetchAll(\PDO::FETCH_ASSOC);

        if (!in_array($_POST['room_id'], array_column($data, 'id'))) {
            $errors['old'] = $request->getParams();
            $errors['error'] = ['booked-day' => 'Các ngày bạn đặt đã có người thuê trước rồi hoặc đang ở  , Vui lòng chọn lại ngày !!!'];
            $_SESSION['validate_data'] = $errors;
            header("Location:{$_SERVER["HTTP_REFERER"]}");
            exit();
        }

        $dataOrder = [
            'code' => "DP" . time(),
            'room_id' => $_POST['room_id'],
            'price_room' => $room['price'],
            'count_people' => $_POST['count_people'],
            'sum_day' => $count_day,
            'total' => $room['price'] * $count_day,
            'start' => $start->format('Y-m-d'),
            'end' => $end->format('Y-m-d'),
            'contents' => $_POST['contents']
        ];
        if (isset($_POST['check_user'])){
            $_dbUser = $this->model('User');
            $data = [
                'name'=>$_POST['name'],
                'email' => $_POST['email'],
                'phone' => $_POST['phone'],
                'password' => md5('123456'),
                'active' => 1
            ];

            $user = $_dbUser->create($data);

            $dataOrder['user_id'] = $user['id'];
            $dataOrder['name'] = $user['name'];
            $dataOrder['email'] = $user['email'];
            $dataOrder['phone'] = $user['phone'];
        }else{
            $user = $this->_database->table('user')->where('id' , '=' , $_POST['user_id'])->find();
            $dataOrder['user_id'] = $user['id'];
            $dataOrder['name'] = $user['name'];
            $dataOrder['email'] = $user['email'];
            $dataOrder['phone'] = $user['phone'];
        }
        $this->_db->create($dataOrder);

        $_SESSION['success'] = ['status' => 'Success !!!'];
        header("Location:" . WEB_ROOT . "/admin/order");
        exit();

    }


    public function show($id)
    {
        $order = $this->_db->findId($id);
        if (!$order) {
            return loadError();
        }

        $order_details = $this->_db->getOrderDetail($id);
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
        header("Location:" . WEB_ROOT . "/admin/order");
        exit();
    }

}