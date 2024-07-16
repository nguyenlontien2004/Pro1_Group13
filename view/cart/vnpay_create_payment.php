
<?php
session_start();

// Xử lý dữ liệu từ form
$amount = $_POST['amount'];
$hoten = $_POST['hoten'];
$address = $_POST['address'];
$email = $_POST['email'];
$tel = $_POST['tel'];


// Lưu thông tin vào session
$_SESSION['details_order'] = [
    'amount' => $amount,
    'hoten' => $hoten,
    'address' => $address,
    'email' => $email,
    'tel' => $tel,
];

error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
date_default_timezone_set('Asia/Ho_Chi_Minh');

/**
 * 
 *
 * @author CTT VNPAY
 */
require_once("./config.php");




$vnp_TxnRef = rand(1, 10000); //Mã giao dịch thanh toán tham chiếu của merchant
$vnp_Amount = $_POST['amount']; // Số tiền thanh toán
$vnp_Locale = "vn"; //Ngôn ngữ chuyển hướng thanh toán
$vnp_BankCode = $_POST['bankCode'];
// $vnp_BankCode = "NCB";
$vnp_IpAddr = $_SERVER['REMOTE_ADDR']; //IP Khách hàng thanh toán


$inputData = array(
    "vnp_Version" => "2.1.0",
    "vnp_TmnCode" => $vnp_TmnCode,
    "vnp_Amount" => $vnp_Amount * 100,
    "vnp_Command" => "pay",
    "vnp_CreateDate" => date('YmdHis'),
    "vnp_CurrCode" => "VND",
    "vnp_IpAddr" => $vnp_IpAddr,
    "vnp_Locale" => $vnp_Locale,
    "vnp_OrderInfo" => "Thanh toán giao dịch : " . $vnp_TxnRef,
    "vnp_OrderType" => "other",
    "vnp_ReturnUrl" => $vnp_Returnurl,
    "vnp_TxnRef" => $vnp_TxnRef,
    "vnp_ExpireDate" => $expire,
);



if (isset($vnp_BankCode) && $vnp_BankCode != "") {
    $inputData['vnp_BankCode'] = $vnp_BankCode;
}

if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
    $inputData['vnp_Bill_State'] = $vnp_Bill_State;
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

$vnp_Url = $vnp_Url . "?" . $query;
if (isset($vnp_HashSecret)) {
    $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret); //  
    $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
}
$returnData = array(
    'code' => '00', 'message' => 'success', 'data' => $vnp_Url
);
if (isset($_POST['redirect'])) {
    header('Location: ' . $vnp_Url);
    die();
} else {
    echo json_encode($returnData);
}
