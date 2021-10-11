<?php

$route = [
    '/' => ['method' => 'GET', 'use' => 'ClientController@home'],

    // Admin Login
    'admin/login'=>['method' => 'GET', 'use' => 'admin/AuthController@login'],
    'admin/login/post'=>['method' => 'POST', 'use' => 'admin/AuthController@postLogin'],
    'admin/logout'=>['method' => 'GET', 'use' => 'admin/AuthController@logout'],

    // Information Login :
    'admin/information' => ['method' => 'GET', 'use' => 'admin/AuthController@information'],
    'admin/information/edit' => ['method' => 'POST', 'use' => 'admin/AuthController@changeInformation'],

    //Route thống kê:
    'admin'=>['method' => 'GET', 'use' => 'admin/DashboardController@index'],

    // route quản trị đặt phòng :
    'admin/order'=>['method' => 'GET', 'use' => 'admin/OrderController@index'],
    'admin/order/show/(\d+)'=>['method' => 'GET', 'use' => 'admin/OrderController@show'],
    'admin/order/update/(\d+)'=>['method' => 'GET', 'use' => 'admin/OrderController@update'],

    // route quản trị khách hàng
    'admin/user'=>['method' => 'GET', 'use' => 'admin/UserController@index'],
    'admin/user/create'=>['method' => 'GET', 'use' => 'admin/UserController@create'],
    'admin/user/store'=>['method' => 'POST', 'use' => 'admin/UserController@store'],
    "admin/user/edit/(\d+)"=> ['method'=>"GET" , "use"=>'admin/UserController@edit' , "param" => '$1' ],
    "admin/user/update/(\d+)"=> ['method'=>"POST" , "use"=>'admin/UserController@update' , "param" => '$1' ],
    "admin/user/delete/(\d+)"=> ['method'=>"GET" , "use"=>'admin/UserController@destroy' , "param" => '$1' ],

    // route quản trị nhân viên
    'admin/customer'=>['method' => 'GET', 'use' => 'admin/CustomerController@index'],
    'admin/customer/create'=>['method' => 'GET', 'use' => 'admin/CustomerController@create'],
    'admin/customer/store'=>['method' => 'POST', 'use' => 'admin/CustomerController@store'],
    "admin/customer/edit/(\d+)"=> ['method'=>"GET" , "use"=>'admin/CustomerController@edit' , "param" => '$1' ],
    "admin/customer/update/(\d+)"=> ['method'=>"POST" , "use"=>'admin/CustomerController@update' , "param" => '$1' ],
    "admin/customer/delete/(\d+)"=> ['method'=>"GET" , "use"=>'admin/CustomerController@destroy' , "param" => '$1' ],

   //  route quản trị bài viết
    'admin/article'=>['method' => 'GET', 'use' => 'admin/ArticleController@index'],
    'admin/article/create'=>['method' => 'GET', 'use' => 'admin/ArticleController@create'],
    'admin/article/store'=>['method' => 'POST', 'use' => 'admin/ArticleController@store'],
    "admin/article/edit/(\d+)"=> ['method'=>"GET" , "use"=>'admin/ArticleController@edit' , "param" => '$1' ],
    "admin/article/update/(\d+)"=> ['method'=>"POST" , "use"=>'admin/ArticleController@update' , "param" => '$1' ],
    "admin/article/delete/(\d+)"=> ['method'=>"GET" , "use"=>'admin/ArticleController@destroy' , "param" => '$1' ],
//
    // route quản trị phòng
    'admin/room'=>['method' => 'GET', 'use' => 'admin/RoomController@index'],
    'admin/room/create'=>['method' => 'GET', 'use' => 'admin/RoomController@create'],
    'admin/room/store'=>['method' => 'POST', 'use' => 'admin/RoomController@store'],
    "admin/room/edit/(\d+)"=> ['method'=>"GET" , "use"=>'admin/RoomController@edit' , "param" => '$1' ],
    "admin/room/update/(\d+)"=> ['method'=>"POST" , "use"=>'admin/RoomController@update' , "param" => '$1' ],
    "admin/room/delete/(\d+)"=> ['method'=>"GET" , "use"=>'admin/RoomController@destroy' , "param" => '$1' ],

];

return $route;

//$routes = [
//    'default_controller' => 'home',
//
//    // client
//    'trang-chu'=>'Home/index',
//    'danh-sach' =>'Product/index',
//    'chi-tiet-phong/.+-(\d+).html' => 'DetailsHotel/index/$1',
//
//    // admin
//    'admin/user'=>'admin/userController/index',
//    'admin/user/edit/(\w+)'=>'admin/userController/edit/$1',
//
//];
//return $routes;
