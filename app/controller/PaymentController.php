<?php


namespace App\Controller;


use Core\Controller;
use Core\Database;

class PaymentController extends Controller
{
    private $_db;
    private $_config;
    public function __construct()
    {
        global $config;
        $this->_db = new Database();
        $this->_config = $config['vnpay'];
    }

    public function index($id)
    {
        $order = $this->_db->table('orders')->where('id' ,'=' , $id)->where('status' , '=' ,1)->find();
        $_SESSION['inforBeforePayment'] = [
            'url_prev' => $_SERVER['HTTP_REFERER'],
            'order' =>$order
        ];

        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $this->_config['vnp_TmnCode'],
            "vnp_Amount" => $order['total'] * 100,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $_SERVER['REMOTE_ADDR'],
            "vnp_Locale" => 'vn',
            "vnp_OrderInfo" => "Thanh toán hóa đơn phí dich vụ",
            "vnp_OrderType" => 'billpayment',
            "vnp_ReturnUrl" => $this->_config['vnp_Returnurl'],
            "vnp_TxnRef" => $order['code'], //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }

        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $this->_config['vnp_Url'] . "?" . $query;
        $vnp_HashSecret = $this->_config['vnp_HashSecret'];
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }

        header("Location:$vnp_Url");
        exit();
    }

    function vnPayReturn()
    {
        if(isset($_SESSION['inforBeforePayment'])){
            print_r($_SESSION['inforBeforePayment']);
        }
        extract($_SESSION['inforBeforePayment']);
        print_r($_GET);
        //unset($_SESSION['inforBeforePayment']);
        if($_GET['vnp_ResponseCode'] == "00") {
            $sql = "UPDATE `orders` SET  orders.`status` = 2 , orders.`payment` = 1 WHERE orders.id = {$order['id']}";

            $this->_db->query($sql)->execute();

            $modelPayment = $this->model("Payment");

            $payment =  $modelPayment->create([
                'p_order_id' => $order['id'],
                'order_code' => $order['code'],
                'p_user_id' => $order['user_id'],
                'p_money' => $_GET['vnp_Amount'],
                'p_note' => $_GET['vnp_OrderInfo'],
                'p_vnp_response_code' => $_GET['vnp_ResponseCode'],
                'p_code_vnpay' => $_GET['vnp_TransactionNo'],
                'p_code_bank' => $_GET['vnp_BankCode'],
                'p_time' => $_GET['vnp_PayDate']
            ]);

            $_SESSION['success'] = ['status' => 'Success !!!'];
            header("Location:$url_prev");
            exit();
        }
        $_SESSION['error_vn_pay'] =  'Lỗi trong quá trình thanh toán phí dịch vụ !!!';
        header("Location:$url_prev");
        exit();
    }

}