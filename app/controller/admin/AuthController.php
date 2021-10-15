<?php


namespace App\Controller\Admin;


use App\Model\Customer;
use Core\Controller;
use Core\Database;
use Core\Request;

class AuthController extends Controller
{
    private $_db;

    function __construct()
    {
        $this->_db = new Database();
    }

    function login()
    {
        if (isset($_SESSION['admin.login'])) {
            header("Location:/admin");
            exit();
        }

        $this->render('admin/page/auth/login');
    }

    function postLogin()
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
        $user = $this->_db->table("customer")->select('id,name,email,phone,image,active')->where('email', '=', arrayGet($_POST, 'email', ''))
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

        $_SESSION['admin.login'] = $user;
        header("Location:/admin");
        exit();
    }

    function logout()
    {
        if (isset($_SESSION['admin.login'])) {
            unset($_SESSION['admin.login']);
        }
        header("Location:/admin/login");
        exit();
    }

    function information()
    {
        if (!isset($_SESSION['admin.login'])) {
            header("Location:/admin/login");
            exit();
        }

        $this->render('admin/index', [
            'page' => 'auth/information',

        ]);
    }

    function changeInformation()
    {
        $request = new Request();

        $request->rule([
            'name' => 'required',
            'email' => 'required|email|unique:customer,email,' . $_SESSION['admin.login']['id'],
            'password' => 'nullable|min:6',
            'phone' => 'required|regex:/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/|unique:customer,phone,' . $_SESSION['admin.login']['id'],
            'image' => 'nullable|image|size:2000000'
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
            'image.image' => "Hình ảnh không hợp lệ (JPG,JPEG,PNG,GIF,...) !!!",
            'image.size' => "Hình ảnh quá lớn ( size < 2MB ) !!!",
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

        if (isset($_FILES['image']) && !$_FILES['image']['error'] == UPLOAD_ERR_NO_FILE) {
            $image = uploadImage($_FILES['image'], './public/upload/user/');
            @unlink($_SESSION['admin']['image']);
            $data['image'] = $image;
        }

        if ($_POST['password'] != "") {
            $data['password'] = md5($_POST['password']);
        }
        $customer = $this->model("Customer");

        $record = $customer->updateRecord('id', $_SESSION['admin.login']['id'], $data);
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
        $_SESSION['admin.login'] = $this->_db->table("customer")->select('id,name,email,phone,image')
            ->where('id', '=', $_SESSION['admin.login']['id'])->find();

        $_SESSION['success'] = ['status' => 'Success !!!'];
        header("Location:/admin/information");
        exit();
    }

}