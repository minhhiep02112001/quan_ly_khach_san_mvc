<?php


namespace App\Controller;


use Core\Controller;
use Core\Database;
use Core\Request;

class CartController extends Controller
{
    private $_db;

    function __construct()
    {
        $this->_db = new Database();
    }

    public function orderRoom()
    {
        if (!isset($_SESSION['user.login'])) {
            $_SESSION['beforAuth'] = [
                'url_prev' => $_SERVER['HTTP_REFERER'],
            ];
            header("Location:". WEB_ROOT."/login");
            exit();
        }

        if (empty($_POST)) {
            return loadError();
        }
        $request = new Request();

        $request->rule([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/',
        ]);

        $request->message([
            'name.required' => "Họ tên không được để trống !!!",
            'email.required' => "Email không được để trống !!!",
            'email.email' => "Email không hợp lệ!!!",
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
            header("Location:{$_SERVER["HTTP_REFERER"]}#booking");
            exit();
        }

        $room = $this->_db->table('room')->where('id' , '=' , $_POST['room_id'])->find();
        if ( $_POST['count_people'] > $room['count_people']  ) {
            $errors = [];
            $errors['old'] = $request->getParams();
            $errors['error'] = ['error_count' => "Số người đặt phòng không hợp lệ"];

            $_SESSION['validate_data'] = $errors;
            header("Location:{$_SERVER["HTTP_REFERER"]}#booking");
            exit();
        }

        $start = date_create($_POST['start_day']);
        $end = date_create($_POST['end_day']);
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
            header("Location:{$_SERVER["HTTP_REFERER"]}#booking");
            exit();
        }

        $_dbOrder = $this->model("Order");


        $dataOrder = [
            'code' => "DP" . time(),
            'start' => $start->format('Y-m-d'),
            'end' => $end->format('Y-m-d'),
            'total' => $_POST['price'] * $count_day,
            'contents' => $_POST['contents'],
            'user_id' => $_SESSION['user.login']['id'],
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'phone' => $_POST['phone'],
            'sum_day' => $count_day,
            'room_id' => $_POST['room_id'],
            'price_room' => $_POST['price'],
            'count_people' => $_POST['count_people']
        ];
        $orderId = $_dbOrder->create($dataOrder);

        $_SESSION['success'] = ['status' => 'Success !!!'];

        header("Location:". WEB_ROOT."/information");
        exit();
    }
}