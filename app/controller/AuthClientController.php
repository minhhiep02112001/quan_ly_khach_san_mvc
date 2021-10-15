<?php


namespace App\Controller;


use Core\Controller;
use Core\Database;
use Core\Request;
use PDO;

class AuthClientController extends Controller
{
    private $_db;

    public function __construct()
    {
        $this->_db = new Database();
    }

    public function login()
    {
        $this->render('login');
    }

    public function postLogin()
    {
        $request = new Request();

        $request->rule([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $request->message([
            'email.required' => "Email không được để trống !!!",
            'email.email' => "Email không hợp lệ!!!",
            'password.required' => "Mật khẩu không được để trống !!!",
            'password.min' => "Mật khẩu phải trên 6 ký tự !!!",
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
        $user = $this->_db->table("user")->select('id,name,email,phone,image,active')->where('email', '=', arrayGet($_POST, 'email', ''))
            ->where('password', '=', md5(arrayGet($_POST, 'password', '')))->find();
        if (!$user) {
            foreach ($request->errors() as $key) {
                $error[] = reset($key);
            }
            $errors['old'] = $request->getParams();
            $errors['error'] = ["Thông tin tài khoản mật khẩu không chính xác !!!"];
            $_SESSION['validate_data'] = $errors;
            header("Location:{$_SERVER["HTTP_REFERER"]}");
            exit();
        }
        if(!$user['active']){
            $errors['error'] = ["Tài khoản của bạn đã bị khóa !!!"];
            $_SESSION['validate_data'] = $errors;
            header("Location:{$_SERVER["HTTP_REFERER"]}");
            exit();
        }
        $_SESSION['user.login'] = $user;
        header("Location:/");
        exit();
    }

    public function register()
    {
        $this->render('register');
    }

    public function postRegister()
    {
        $request = new Request();

        $request->rule([
            'name' => 'required',
            'email' => 'required|email|unique:user,email',
            'password' => 'required|min:6',
            'phone' => 'required|regex:/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/|unique:user,phone',
        ]);

        $request->message([
            'name.required' => "Họ tên không được để trống !!!",
            'email.required' => "Email không được để trống !!!",
            'email.email' => "Email không hợp lệ!!!",
            'email.unique' => "Email đã tồn tại !!!",
            'phone.unique' => "Số điện thoại đã tồn tại !!!",
            'phone.required' => "Số điện thoại không được để trống !!!",
            'phone.regex' => "Số điện thoại không hợp lệ !!!",
            'password.min' => "Mật khẩu phải trên 6 ký tự !!!",

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
        $data = [
            'name' => arrayGet($_POST, 'name'),
            'email' => arrayGet($_POST, 'email'),
            'phone' => arrayGet($_POST, 'phone'),
            'active' => 1,
            'password' => md5($_POST['password'])
        ];

        $customer = $this->model("User");

        $record = $customer->create($data);
        if (!$record) {
            $errors = [];
            $errors['old'] = $request->getParams();
            $errors['error'] = [
                "err" => "Lỗi ! Không thể sửa bản ghi"
            ];
            $_SESSION['validate_data'] = $errors;
            header("Location:{$_SERVER["HTTP_REFERER"]}");
            exit();
        }

        $_SESSION['success'] = ['status' => 'Success !!!'];
        header("Location:{$_SERVER["HTTP_REFERER"]}");
        exit();
    }

    public function logout()
    {
        if (isset($_SESSION['user.login'])) {
            unset($_SESSION['user.login']);
        }
        header("Location:/");
        exit();
    }

    public function information()
    {
        if (!isset($_SESSION['user.login'])) {
            header("Location:/login");
        }
        $sql = "SELECT orders.`code` , orders.`id` , orders.`status` , orders.total , orders.`start` , orders.`end` , orders.contents , 
                orders.user_id , room.title , room.image , order_detail.count_people , order_detail.price  FROM orders  
                RIGHT  JOIN order_detail  ON orders.ID = order_detail.order_id
                RIGHT  JOIN room  ON order_detail.room_id = room.id
                RIGHT  JOIN `user`  ON `user`.id = orders.user_id
                WHERE orders.user_id = {$_SESSION['user.login']['id']} Order BY orders.id desc ;";

        $listOrder = $this->_db->query($sql)->fetchAll(PDO::FETCH_ASSOC);

        $this->render('information', [
            'orders' => $listOrder
        ]);
    }

    public function updateInformation()
    {
        if (!isset($_SESSION['user.login'])) {
            header("Location:/login");
        }
        $request = new Request();

        $request->rule([
            'name' => 'required',
            'email' => 'required|email|unique:user,email,' . $_SESSION['user.login']['id'],
            'password' => 'nullable|min:6',
            'phone' => 'required|regex:/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/|unique:user,phone,' . $_SESSION['user.login']['id'],
        ]);

        $request->message([
            'name.required' => "Họ tên không được để trống !!!",
            'email.required' => "Email không được để trống !!!",
            'email.email' => "Email không hợp lệ!!!",
            'email.unique' => "Email đã tồn tại !!!",
            'phone.unique' => "Số điện thoại đã tồn tại !!!",
            'phone.required' => "Số điện thoại không được để trống !!!",
            'phone.regex' => "Số điện thoại không hợp lệ !!!",
            'password.min' => "Mật khẩu phải trên 6 ký tự !!!",

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
        $data = [
            'name' => arrayGet($_POST, 'name'),
            'email' => arrayGet($_POST, 'email'),
            'phone' => arrayGet($_POST, 'phone'),
        ];
        if (!empty($_POST['password'])) {
            $data['password'] = md5($_POST['password']);
        }
        $user = $this->model("User");

        $record = $user->updateRecord('id', $_SESSION['user.login']['id'], $data);
        if (!$record) {
            $errors = [];
            $errors['old'] = $request->getParams();
            $errors['error'] = [
                "err" => "Lỗi ! Không thể sửa bản ghi"
            ];
            $_SESSION['validate_data'] = $errors;
            header("Location:{$_SERVER["HTTP_REFERER"]}");
            exit();
        }
        $_SESSION['user.login'] = $this->_db->table("user")->select('id,name,email,phone,image')
            ->where('id', '=', $_SESSION['user.login']['id'])->find();
        $_SESSION['success'] = ['status' => 'Success !!!'];
        header("Location:{$_SERVER["HTTP_REFERER"]}");
        exit();
    }

}