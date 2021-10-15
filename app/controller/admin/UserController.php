<?php


namespace App\Controller\Admin;


use Core\ArgumentCountError;
use Core\Controller;
use Core\Pagination;
use Core\Request;
//use Quan_ly_khach_san\App;

class UserController extends Controller
{
    private $_config ;
    protected $_db;
    public function __construct()
    {
        global $config;
        if(!isset($_SESSION['admin.login'])){
            header("Location:/admin/login");
            exit();
        }
        $this->_config = $config;
        $this->_db = $this->model('User');
    }
    function index(){
        $page = ($_REQUEST['page']) ?? 1;
        $limit = $this->_config['pagination']['limit'];
        $start = ( $page - 1 ) * $limit;
        unset($_REQUEST['page']);

        $data_search=[]; /// tìm kiếm
        if (count($_REQUEST) > 0) {
            $url_param = ""; /// parameter url pagination
            foreach ($_REQUEST as $key => $value) {
                if(empty($value)){
                    continue;
                }
                $data_search[$key] = $value;
                $url_param .= "&{$key}={$value}";
            }
        }

        $data = $this->_db->getAll( $data_search ,$limit , $start);

        $config = [
            'total' => $data['total'] ?? 0,
            'limit' => $limit,
            'url' => './admin/user',
            'full' => false, //bỏ qua nếu không muốn hiển thị full page
            'param' => $url_param ?? ""
        ];

        $page =  new Pagination($config);


        $this->render('admin/index',[
            'page'=>'user/index',
            'users'=> $data['data'],
            'paginate' => $page,
            'start' => $start
        ]);
    }

    function create(){
        $this->render('admin/index',[
            'page'=> 'user/create'
        ]);
    }

    function store(){
        $request = new Request();

        $request->rule([
            'name' =>'required',
            'email' => 'required|email|unique:user,email',
            'password' =>'required|min:6',
            'phone' =>'required|regex:/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/|unique:user,phone',
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
            'password.required' => "Mật khẩu không được để trống !!!",
            'password.min' => "Mật khẩu phải trên 6 ký tự !!!",
            'image.image' => "Hình ảnh không hợp lệ (JPG,JPEG,PNG,GIF,...) !!!",
            'image.size' => "Hình ảnh quá lớn ( size < 2MB ) !!!",
        ]);

        $validate = $request->validate();

        if(!$validate){
            foreach ($request->errors() as $key){
                $error[]= reset($key);
            }
            $errors = [];
            $errors['old'] = $request->getParams();
            $errors['error'] = $error;
            $_SESSION['validate_data'] = $errors;
            header("Location:{$_SERVER["HTTP_REFERER"]}");
            exit();
        }

        $data = [
            'name'=>arrayGet($_POST , 'name' ),
            'email'=>arrayGet($_POST , 'email' ),
            'phone'=>arrayGet($_POST , 'phone' ),
            'active'=>arrayGet($_POST , 'active' ,0 ),
            'password'=>md5(arrayGet($_POST , 'password')),
        ];

        if(isset($_FILES['image']) && !$_FILES['image']['error'] == UPLOAD_ERR_NO_FILE ) {
            $image = uploadImage($_FILES['image'], './public/upload/user/');
            $data['image'] = $image ??'';
        }

        $record = $this->_db->create($data);

        if(!$record){
            $errors = [];
            $errors['old'] = $request->getParams();
            $errors['error'] = [
                "err" => "Lỗi ! Không thể chèn bản ghi "
            ];
            $_SESSION['validate_data'] = $errors;
            header("Location:{$_SERVER["HTTP_REFERER"]}");
            exit();
        }
        $_SESSION['success'] = [ 'status' => 'Success !!!' ];
        header("Location:/admin/user");
        exit();

    }

    public  function edit($id){
        $user = $this->_db->findId($id);
        if(!$user){
            return loadError();
        }
        $this->render('admin/index',[
            'page'=>'user/edit',
            'user'=>$user
        ]);
    }

    public function update($id){

        $user = $this->_db->findId($id);

        if(!$user){
            return loadError();
        }

        $request = new Request();

        $request->rule([
            'name' =>'required',
            'email' => 'required|email|unique:user,email,'.$id,
            'password' =>'nullable|min:6',
            'phone' =>'required|regex:/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/|unique:user,phone,'.$id,
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

        if(!$validate){
            foreach ($request->errors() as $key){
                $error[]= reset($key);
            }
            $errors = [];
            $errors['old'] = $request->getParams();
            $errors['error'] = $error;
            $_SESSION['validate_data'] = $errors;
            header("Location:{$_SERVER["HTTP_REFERER"]}");
            exit();
        }

        $data = [
            'name'=>arrayGet($_POST , 'name' ),
            'email'=>arrayGet($_POST , 'email' ),
            'phone'=>arrayGet($_POST , 'phone' ),
            'active'=>arrayGet($_POST , 'active' ,0 ),
        ];

        if(isset($_FILES['image']) && !$_FILES['image']['error'] == UPLOAD_ERR_NO_FILE ) {
            $image = uploadImage($_FILES['image'], './public/upload/user/');
            @unlink($user['image']);
            $data['image']=$image;
        }

        if($_POST['password'] != ""){
            $data['password'] = md5($_POST['password']);
        }

        $record = $this->_db->updateRecord('id' , $id , $data);
        if(!$record){
            $errors = [];
            $errors['old'] = $request->getParams();
            $errors['error'] = [
                "err" => "Lỗi ! Không thể sửa bản ghi"
            ];
            $_SESSION['validate_data'] = $errors;
            header("Location:{$_SERVER["HTTP_REFERER"]}");
            exit();
        }

        $_SESSION['success'] = [ 'status' => 'Success !!!' ];
        header("Location:/admin/user");
        exit();
    }
    public function destroy($id){
        $user = $this->_db->findId($id); /// kiểm tra tồn tại user
        if(!$user){
            return loadError();
        }

        if($this->_db->deleteRecord('id' , $id)){
            $_SESSION['success'] = [
                'status' => 'Success !!!'
            ];
            header("Location:/admin/user");
            exit();
        }else{
            $_SESSION['success'] = [
                'error' => 'Error !!!'
            ];
            header("Location:/admin/user");
            exit();
        }
    }
}