<?php
$config = [

    'pagination' => [
        'limit' => '5'
    ],

    'vnpay' => [
        'vnp_TmnCode' => "8NFY46A4", //Website ID in VNPAY System
        'vnp_HashSecret' => "BRRRDWMDYNMTKANKHBEBEYHVIXIRNXBE", //Secret key
        'vnp_Url' => "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html",
        'vnp_Returnurl' => WEB_ROOT . "/online/payment/return",
        'vnp_apiUrl' => "http://sandbox.vnpayment.vn/merchant_webapi/merchant.html",
    ],

    'status' => [
        'Đặt phòng',
        'Thành công',
        'Đã thanh toán',
        'Nhân viên hủy',
        'Khách hàng hủy',
    ]
];

return $config;

