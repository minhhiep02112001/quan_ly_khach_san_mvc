<?php
$config['pagination'] = [
    'limit' => '5'
];

$config['status'] = [
    'Đặt phòng',
    'Thành công',
    'Đã thanh toán',
    'Nhân viên hủy',
    'Khách hàng hủy',
];

$config['vnpay']=[
    'vnp_TmnCode' => "8NFY46A4", //Website ID in VNPAY System
    'vnp_HashSecret' => "BRRRDWMDYNMTKANKHBEBEYHVIXIRNXBE", //Secret key
    'vnp_Url' => "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html",
    'vnp_Returnurl' => "http://quanlykhachsan.local/online/payment/return",
    'vnp_apiUrl' => "http://sandbox.vnpayment.vn/merchant_webapi/merchant.html",
];
return $config;

