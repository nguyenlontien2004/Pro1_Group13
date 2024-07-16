<?php
session_start();
ob_start();
include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "model/taikhoan.php";
include "model/binhluan.php";
include "model/donhang.php";
include "model/cart.php";
include "model/bienthe.php";
include "view/header.php";
$spnew = loadall_sanpham_home();
$spnew2 = loadall_sanpham_home2();
$sphot = loadall_sanpham_top10();
$dsdm = loadall_danhmuc();
$dssp = loadall_sanpham();
$listhoadon = loadall_hoadon();
$listsanpham = loadall_bt();

if (!isset($_SESSION['giohang'])) $_SESSION['giohang'] = [];

if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanpham':
            // Check if 'kyw' is set in POST and not empty
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }

            // Check if 'iddm' is set in GET and greater than 0
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }

            // Retrieve 'min_price' and 'max_price' from GET and convert them to integers
            $minPrice = isset($_GET['min_price']) ? (int)$_GET['min_price'] : null;
            $maxPrice = isset($_GET['max_price']) ? (int)$_GET['max_price'] : null;

            // Call the 'loadall_sanpham' function with the specified parameters
            $dssp = loadall_sanpham($kyw, $iddm, $minPrice, $maxPrice);

            // Load the name of the category based on 'iddm'
            $ten_dm = load_ten_dm($iddm);

            // Include the 'sanpham.php' file to display the products
            include "view/sanpham.php";
            break;
        case 'search':
            if (isset($_POST['keysword']) && ($_POST['keysword'] != "")) {
                $keysword = $_POST['keysword'];
            } else {
                $keysword = "";
            }

            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $listsanpham = search_giay($keysword, $iddm);
            include 'view/search.php';
            break;
        case 'sanphamct':
            if (isset($_POST['guibinhluan'])) {
                insert_binhluan($_POST['id_sp'], $_POST['noidung']);
            }
            if (isset($_GET['id_sp']) && ($_GET['id_sp'] > 0)) {
                $id_sp = $_GET['id_sp'];
                $onesp = loadone_sanpham($id_sp);
                extract($onesp);
                $sp_cungloai = load_sanpham_cungloai($id_sp, $id_dm);
                $binhluan = loadall_binhluan($_GET['id_sp']);
                $id_sp = $_GET['id_sp'];
                include "view/chitietsanpham.php";
            } else {
            }
            break;
        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $ten_tk = $_POST['user'];
                $email = $_POST['email'];
                $sdt = $_POST['phone'];
                $pass = $_POST['pass'];
                insert_taikhoan($email, $ten_tk, $sdt, $pass);
                echo '<script>alert("Đăng ký thành công");</script>';
            }
            include "view/taikhoan/dangky.php";
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $ten_tk = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($ten_tk, $pass);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    header('location: index.php');
                    exit;
                } else {
                    $thongbao = "Tài khoản không tồn tại. Vui lòng nhập lại";
                }
            }
            include "view/taikhoan/dangnhap.php";
            break;
        case 'edit_taikhoan':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $ten_tk = $_POST['ten_tk'];
                $hinh = $_FILES['hinh']['name'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $diachi = $_POST['diachi'];
                $sdt = $_POST['sdt'];
                $id_tk = $_POST['id_tk'];
                $target_dir = "uploads/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                } else {
                }
                update_taikhoan($id_tk, $ten_tk, $email, $hinh, $pass, $sdt, $diachi);
                $_SESSION['user'] = checkuser($ten_tk, $pass);
                $thongbao = "Cập nhật thành công !";
                header('loacation:index.php?act=edit_taikhoan.php');
            }
            include "view/taikhoan/capnhatusser.php";
            break;
        case 'quenmk':
            if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
                $email = $_POST['email'];
                $checkemail = checkemail($email);
                if (is_array(($checkemail))) {
                    $thongbao = "Mật khẩu của bạn là:" . $checkemail['pass'];
                } else {
                    $thongbao = "Email này không tồn tại!";
                }
            }
            include "view/taikhoan/quenmk.php";
            break;
        case 'sanphamloc':
            if (isset($_POST['search']) && ($_POST['search'])) {
                $keysword = $_POST['keysword'];
                $id_dm = $_POST['id_dm'];
            } else {
                $keysword = '';
                $id_dm = 0;
            }
            $dsdm = loadall_danhmuc();
            // $dmsploc = loadall_sanpham($kwy, $id_dm);
            if (isset($_GET['id_dm'])) {
                $iddm = $_GET['id_dm'];
            } else {
                $iddm = rand(24, 26);
            }
            // $listsanpham = search_giay($keysword, $iddm);
            $locsp = locsp($iddm);
            include "view/danhmucsp.php";
            break;
        case 'user':
            include "view/taikhoan/user.php";
            break;
        case 'giohang':
            include "view/cart/giohang.php";
            break;
        case 'danhmucsp':

            include "view/danhmucsp.php";
            break;
        case 'dangxuat':
            session_unset();
            header('location:index.php');
            include "view/gioithieu.php";
            break;
        case 'doimk':
            if (isset($_POST['doimk']) && ($_POST['doimk'])) {
                $passow = $_POST['pass'];
                $passold = $_POST['passold'];
                $passnew = $_POST['passnew'];
                $passnew2 = $_POST['passnew2'];
                $id_tk = $_POST['id_tk'];
                if ($passold == '' && $passnew == '' && $passnew2 == "") {
                    $thongbao = "Vui lòng bạn nhập đủ thông tin.";
                }
                if ($passow == $passold) {
                    if ($passnew == $passnew2) {
                        update_mk($id_tk, $pass, $passnew);
                        $thongbao = "Cập nhật mật khẩu thành công !";
                    } else {
                        $thongbao = "Mật khẩu mới nhập không khớp";
                    }
                } else {
                    $thongbao = "Mật khẩu cũ nhập không khớp";
                }

                header('loacation:index.php?act=doimk.php');
            }
            include "view/taikhoan/doimk.php";
            break;
        case "addcart":
            if (isset($_SESSION['user'])) {
                if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                    $id_sp = $_POST['id'];
                    $ten_sp = $_POST['name'];
                    $hinh = $_POST['img'];
                    // $size = $_POST['size'];
                    $kichthuoc = $_POST['kichthuoc'];
                    if (isset($_POST['soluong'])) {
                        $sl = $_POST['soluong'];
                    } else {
                        $sl = 1;
                    }
                    $fg = 0;
                    $i = 0;
                    $gia_sp = $_POST['price'];

                    foreach ($_SESSION['giohang'] as $item) {
                        if ($item[1] == $ten_sp) {
                            if (!empty($_POST['type']) && $_POST['type'] == 'update') {
                                $slnew = $sl;
                            } else {
                                $slnew = $sl + $item[4];
                            }
                            $_SESSION['giohang'][$i][5] = $slnew;
                            $fg = 1;
                            break;
                        }
                        $i++;
                    }
                    if ($fg == 0) {
                        $item = array($id_sp, $ten_sp, $hinh, $gia_sp, $sl, $kichthuoc);
                        $_SESSION['giohang'][] = $item;
                    }

                    // Khởi tạo 1 mảng con trước khi đưa vào giỏ hàng

                    header('location:index.php?act=giohang');
                }
                include "view/cart/giohang.php";
            } else {
                header('location: index.php?act=dangnhap');
            }
            break;
        case "delcart":
            if (isset($_GET['i']) && ($_GET['i'] > 0)) {
                if (isset($_SESSION['giohang']) && (count($_SESSION['giohang']) > 0))
                    array_splice($_SESSION['giohang'], $_GET['i'], 1);
            } else {
                if (isset($_SESSION['giohang'])) unset($_SESSION['giohang']);
            }
            if (isset($_SESSION['giohang']) && (count($_SESSION['giohang']) > 0)) {
                header('location:index.php?act=addcart');
            } else {
                header('location:index.php');
            }
            break;
        case 'thanhtoan':
            if (isset($_POST['thanhtoan'])) {
                $tongdonhang = $_POST['tongdonhang'];
                $hoten = $_POST['hoten'];
                $address = $_POST['address'];
                $email = $_POST['email'];
                $tell = $_POST['tel'];
                $pttt = $_POST['pttt'];
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $ngaydathang = date('Y-m-d H:i:s');
                //ma don hang
                $madh = "shopbh" . rand(0, 999999);
                // tạo đơn hàng trả về id đơn hàng |
                // $item = array($id,$tensp,$img,$gia,$sl);
                $iddh = taodonhang($madh, $tongdonhang, $pttt, $hoten, $address, $ngaydathang, $email, $tell);
                $_SESSION['iddh'] = $iddh;
                if (isset($_SESSION['giohang']) && count($_SESSION['giohang']) > 0) {

                    foreach ($_SESSION['giohang'] as $item) {
                        addtocard($iddh, $item[0], $item[1], $item[2], $item[3], $item[4]);
                    }
                    unset($_SESSION['giohang']);
                }

                include "view/cart/bill.php";
            }
            break;
        case 'insert_vnpay':
            if (isset($_POST['insert_vnpay']) && $_POST['insert_vnpay']) {
                $amount = $_POST['amount'];
                $hoten = $_POST['hoten'];
                $address = $_POST['address'];
                $email = $_POST['email'];
                $tel = $_POST['tel'];
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $ngaydathang = date('Y-m-d H:i:s');
                //ma don hang
                $madh = "shopbh" . rand(0, 999999);
                // tạo đơn hàng trả về id đơn hàng |
                // $item = array($id,$tensp,$img,$gia,$sl);
                $iddh = taodonhang($madh, $amount, 'VNPAY', $hoten, $address, $ngaydathang, $email, $tel);
                $_SESSION['iddh'] = $iddh;
                if (isset($_SESSION['giohang']) && count($_SESSION['giohang']) > 0) {

                    foreach ($_SESSION['giohang'] as $item) {
                        addtocard($iddh, $item[0], $item[1], $item[2], $item[3], $item[4]);
                    }
                    unset($_SESSION['giohang']);
                }

                include "view/cart/bill.php";
            }
            break;
        case "dathang":
            // if ($_POST['dathang']) {
            //     echo '<script>alert("Bạn đã đặt hàng thành công.");</script>';
            // }
            include "view/cart/lichsudonhang.php";
            break;
        case 'thanhtoan23':
            include "view/cart/viewdonhang.php";
            break;
        case 'lsmh':
            include "view/cart/lichsudonhang.php";
            break;
        case 'lienhe':
            include "view/lienhe.php";
            break;
        default:
            include 'view/home.php';
            break;
    }
} else {
    include "view/home.php";
}
include "view/footer.php";
