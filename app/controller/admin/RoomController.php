<?php


namespace App\Controller\Admin;


use Core\Controller;
use Core\Pagination;
use Core\Request;

class RoomController extends Controller
{
    private $_config;
    protected $_db;

    public function __construct()
    {
        global $config;
        if (!isset($_SESSION['admin.login'])) {
            header("Location:/admin/login");
            exit();
        }
        $this->_config = $config;
        $this->_db = $this->model('Room');
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
            'url' => './admin/room',
            'full' => false, //bỏ qua nếu không muốn hiển thị full page
            'param' => $url_param ?? ""
        ];

        $page = new Pagination($config);


        $this->render('admin/index', [
            'page' => 'room/index',
            'rooms' => $data['data'],
            'paginate' => $page,
            'start' => $start
        ]);
    }

    function create()
    {
        $this->render('admin/index', [
            'page' => 'room/create'
        ]);
    }

    function store()
    {
        $request = new Request();

        $request->rule([
            'title' => 'required|unique:room,title',
            'summary' => 'required',
            'details_description' => 'required',
            'image' => 'nullable|image|size:2000000'
        ]);

        $request->message([
            'title.required' => "Tiêu đề không được để trống !!!",
            'title.unique' => "Tiêu đề đã tồn tại !!!",
            'summary.required' => "Mô tả không được để trống !!!",
            'details_description.required' => "Mô tả chi tiết không được để trống !!!",
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
        if (isset($_FILES['image']) && !$_FILES['image']['error'] == UPLOAD_ERR_NO_FILE) {
            $image = uploadImage($_FILES['image'], './public/upload/room/');
        }
        $data = [
            'title' => arrayGet($_POST, 'title'),
            'slug' => createSlug(arrayGet($_POST, 'title')),
            'summary' => arrayGet($_POST, 'summary'),
            'active' => arrayGet($_POST, 'active', 0),
            'price' => arrayGet($_POST, 'price', 0),
            'details_description' => arrayGet($_POST, 'details_description'),
            'image' => $image ?? '',
            'count_people' => arrayGet($_POST, 'count_people', 0)
        ];

        $record = $this->_db->create($data);

        if (!$record) {
            $errors = [];
            $errors['old'] = $request->getParams();
            $errors['error'] = [
                "err" => "Lỗi ! Không thể chèn bản ghi "
            ];
            $_SESSION['validate_data'] = $errors;
            header("Location:{$_SERVER["HTTP_REFERER"]}");
            exit();
        }
        $_SESSION['success'] = ['status' => 'Success !!!'];
        header("Location:/admin/room");
        exit();

    }

    public function edit($id)
    {
        $room = $this->_db->findId($id);
        if (!$room) {
            return loadError();
        }
        $this->render('admin/index', [
            'page' => 'room/edit',
            'room' => $room
        ]);
    }

    public function update($id)
    {

        $room = $this->_db->findId($id);

        if (!$room) {
            return loadError();
        }

        $request = new Request();

        $request->rule([
            'title' => 'required|unique:room,title,' . $id,
            'summary' => 'required',
            'details_description' => 'required',
            'image' => 'nullable|image|size:2000000'
        ]);

        $request->message([
            'title.required' => "Tiêu đề không được để trống !!!",
            'title.unique' => "Tiêu đề đã tồn tại !!!",
            'summary.required' => "Mô tả không được để trống !!!",
            'details_description.required' => "Mô tả chi tiết không được để trống !!!",
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
            'title' => arrayGet($_POST, 'title'),
            'slug' => createSlug(arrayGet($_POST, 'title')),
            'summary' => arrayGet($_POST, 'summary'),
            'active' => arrayGet($_POST, 'active', 0),
            'price' => arrayGet($_POST, 'price', 0),
            'details_description' => arrayGet($_POST, 'details_description'),
            'count_people' => arrayGet($_POST, 'count_people', 0)
        ];

        if (isset($_FILES['image']) && !$_FILES['image']['error'] == UPLOAD_ERR_NO_FILE) {
            $image = uploadImage($_FILES['image'], './public/upload/user/');
            @unlink($room['image']);
            $data['image'] = $image;
        }


        $record = $this->_db->updateRecord('id', $id, $data);
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
        header("Location:/admin/room");
        exit();
    }

    public function destroy($id)
    {
        $room = $this->_db->findId($id); /// kiểm tra tồn tại user
        if (!$room) {
            return loadError();
        }

        if ($this->_db->deleteRecord('id', $id)) {
            $_SESSION['success'] = [
                'status' => 'Success !!!'
            ];
            header("Location:/admin/room");
            exit();
        } else {
            $_SESSION['success'] = [
                'error' => 'Error !!!'
            ];
            header("Location:/admin/room");
            exit();
        }
    }
}