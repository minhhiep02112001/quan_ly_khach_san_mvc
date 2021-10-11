<?php

function arrayGet($arr, $key, $default = '')
{
    if (!is_array($arr) || empty($arr[$key])) {
        return $default;
    }

    return $arr[$key];
}

function uploadImage($file , $target_dir = "")
{

    /// check tồn tại file trong forder:
    $file_name = $file["name"];
    while (file_exists($target_dir.$file_name) === true) {
        # code...
        $file_name = substr_replace($file_name, substr($file_name,0,strripos($file_name,"."))."_".rand(0,100), 0 , strripos($file_name,"."));
    }
    //upload
    if (move_uploaded_file($file["tmp_name"], $target_dir.$file_name)) {
        return $target_dir.$file_name;
    }
    else {
        return "";
    }
}
function Unlink_file_image($file)
{
    # code...
    if (file_exists($file)) {
        # code...
        unlink($file);
    }
}


function loadError($name = 404, $data = [])
{
    extract($data);
    require_once "app/error/$name.php";
}

function asset($path)
{
    return WEB_ROOT . '/public/' . ltrim($path, '/');
}

function activeMenu($str){
    $url = arrayGet($_SERVER, 'PATH_INFO', '/');

    $path = str_replace('/' ,'\/' , $str);
    if(preg_match("/^$path$/" , $url)){
        return 'active';
    }
    return '';
}

function create_slug($string)
{
    $search = array(
        '#(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)#',
        '#(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)#',
        '#(ì|í|ị|ỉ|ĩ)#',
        '#(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)#',
        '#(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)#',
        '#(ỳ|ý|ỵ|ỷ|ỹ)#',
        '#(đ)#',
        '#(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)#',
        '#(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)#',
        '#(Ì|Í|Ị|Ỉ|Ĩ)#',
        '#(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)#',
        '#(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)#',
        '#(Ỳ|Ý|Ỵ|Ỷ|Ỹ)#',
        '#(Đ)#',
        "/[^a-zA-Z0-9\-\_]/",
    );
    $replace = array(
        'a',
        'e',
        'i',
        'o',
        'u',
        'y',
        'd',
        'A',
        'E',
        'I',
        'O',
        'U',
        'Y',
        'D',
        '-',
    );
    $string = preg_replace($search, $replace, $string);
    $string = preg_replace('/(-)+/', '-', $string);
    $string = strtolower($string);
    return $string;
}