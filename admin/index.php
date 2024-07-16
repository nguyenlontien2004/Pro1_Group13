<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/thongke.php";
include "../model/binhluan.php";
include "../model/donhang.php";
include "../model/bienthe.php";

include "header.php";
$tatcatrangthai = [
     ['code' => 'choxuly', 'name' => 'Chờ xử lí'],
     ['code' => 'dangxuly', 'name' => 'Đang xử lí'],
     ['code' => 'chovanchuyen', 'name' => 'Chờ vận chuyển'],
     ['code' => 'donhangdangvanchuyen', 'name' => 'Đơn hàng đang vận chuyển'],
     ['code' => 'davanchuyen', 'name' => 'Vận chuyển thành công'],
     ['code' => 'hoanthanhdonhang', 'name' => 'Hoàn thành đơn hàng'],
     ['code' => 'huydonhang', 'name' => 'Hủy đơn hàng']

];
if (isset($_GET['act']) && ($_GET['act'] != "")) {
     $act = $_GET['act'];
     switch ($act) {
          case "add-dm":
               if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $tendm = $_POST['tendm'];
                    $result = insert_danhmuc($tendm);
                    if ($result) {
                         header('Location: index.php?act=list-dm');
                         exit;
                    } else {
                         $error_message = "Failed to insert the category.";
                    }
               }
               include "danhmuc/add.php";
               break;
          case "list-dm":
               $listdanhmuc = loadall_danhmuc();
               include "danhmuc/list.php";
               break;
          case "list_taikhoan":
               $listtaikhoan =  loadall_khachhang();
               include "taikhoan/list.php";
               break;
          case "list-bl":
               $listbinhluan  = loadall_binhluan(0);
               include "binhluan/list.php";
               break;
          case 'xoa-dm':
               if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_danhmuc($_GET['id']);
               }
               $listdanhmuc = loadall_danhmuc();
               include "danhmuc/list.php";
               break;
          case 'xoa-bl':
               if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_binhluan($_GET['id']);
               }
               $listbinhluan  = loadall_binhluan(0);
               include "binhluan/list.php";
               break;
          case 'sua-dm':
               if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $danhmuc = loadone_danhmuc($_GET['id']);
               }
               include "danhmuc/update.php";
               break;
          case 'update-dm':
               if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $tendm = $_POST['tendm'];
                    $id = $_POST['id'];
                    update_danhmuc($id, $tendm);
                    $thongbao = "cap nhat thanh cong";
               }
               $listdanhmuc = loadall_danhmuc();
               include "danhmuc/list.php";
               break;
          case "add-sp":
               $listdanhmuc = loadall_danhmuc();
               include "sanpham/add.php";
               if (isset($_POST['themmoi'])) {
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $size = $_POST['size'];
                    $soluong = $_POST['soluong'];
                    $mota = $_POST['mota'];
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "../uploads/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                         // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                    } else {
                         // echo "Sorry, there was an error uploading your file.";
                    };

                    insert_sanpham($tensp, $giasp, $hinh, $size, $soluong, $mota, $iddm);
                    echo '<script>
                             alert("Bạn đã thêm sản phẩm thành công.");
                     </script>';
                    // header("Location: index.php?act=list-sp");
                    // echo "<script>window.location.href='index.php?act=list-sp';</script>";
               }
               break;
          case 'sua-sp':
               if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $sanpham = loadone_sanpham($_GET['id']);
               }
               // $listsanpham = loadall_sanpham();
               $listdanhmuc = loadall_danhmuc();
               include "sanpham/update.php";
               break;
          case 'update-sp':
               if (isset($_POST['capnhat'])) {
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $hinh = $_FILES['hinh']['name'];
                    $giasp = $_POST['giasp'];
                    $size = $_POST['size'];
                    $soluong = $_POST['soluong'];
                    $mota = $_POST['mota'];
                    $id = $_POST['id'];
                    $target_dir = "./uploads/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    } else {
                    }
                    $listsanpham = update_sanpham($id, $tensp, $iddm, $giasp, $size, $soluong, $mota, $hinh);
                    echo '<script>alert("Bạn đã cập nhật danh mục thành công.");</script>';
               }
               $listdanhmuc = loadall_danhmuc();
               $listsanpham = loadall_sanpham();
               include "sanpham/list.php";
               break;

          case 'list-sp':
               if (isset($_POST['listok']) && ($_POST['listok'])) {
                    $kyw = $_POST['kyw'];
                    $iddm = $_POST['iddm'];
               } else {
                    $kyw = '';
                    $iddm = 0;
               }
               $listdanhmuc = loadall_danhmuc();
               $listsanpham = loadall_sanpham($kyw, $iddm);
               include "sanpham/list.php";
               break;
          case 'xoa-sp':
               if (isset($_GET['id']) && $_GET['id'] != "") {
                    delete_sanpham($_GET['id']);
               }
               $listdanhmuc = loadall_danhmuc();
               $listsanpham = loadall_sanpham();
               include "sanpham/list.php";
               break;

          case 'list-tk':
               $listtaikhoan = loadall_khachhang();
               include "taikhoan/list-tkhoan.php";
               break;
          case "list-dh":
               $listhoadon = loadall_hoadon();
               include "quanlidonhang/list-dh.php";
               break;
          case 'huydh':
               if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $id = $_POST['id'];
                    huydh($id);
                    include "view/cart/lichsudonhang.php";
               }
               // $listdanhmuc = loadall_danhmuc();

               break;
          case 'suatrangthaidonhang':
               if (isset($_POST['id']) && isset($_POST['trangthai'])) {
                    update_trangthai($_POST['id'], $_POST['trangthai']);
               }
               break;
          case 'xoatk':
               if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_taikhoan($_GET['id']);
               }
               $listkhachhang = loadall_khachhang()("", 0);
               include "khachhang/list.php";
               break;
          case 'suatk':
               if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $khachhang = loadone_khachhang($_GET['id']);
               }
               include "khachhang/update.php";
               break;

          case 'updatetk':
               if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $user_name = $_POST['user'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    $tel = $_POST['tel'];
                    $address = $_POST['address'];
                    $id = $_POST['id'];
                    $role = $_POST['role'];
                    // $tk = update_tk($id,$user_name,$email,$tel,$pass, $address,$role);
                    header("Location:index.php?act=updatetk");
               }
               include "khachhang/list.php";
               break;
               $listdanhmuc = loadall_danhmuc();
               include "sanpham/add.php";
               if (isset($_POST['themmoi'])) {
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $size = $_POST['size'];
                    $soluong = $_POST['soluong'];
                    $mota = $_POST['mota'];
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "../uploads/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                         // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                    } else {
                         // echo "Sorry, there was an error uploading your file.";
                    };

                    insert_sanpham($tensp, $giasp, $hinh, $size, $soluong, $mota, $iddm);
                    echo '<script>
                             alert("Bạn đã thêm sản phẩm thành công.");
                     </script>';
                    // header("Location: index.php?act=list-sp");
                    // echo "<script>window.location.href='index.php?act=list-sp';</script>";
               }
               break;
          case "add-bt":
               if (isset($_POST['themmoi'])) {
                    $id_sp = $_POST['idsp'];
                    $size = $_POST['size'];
                    $soluong = $_POST['sl'];
                    insert_bienthe($id_sp, $size, $soluong);
                    echo '<script>
                             alert("Bạn đã thêm biến thể thành công.");
                     </script>';
               }
               $listsanpham = loadall_sanpham();
               $listbt = loadall_bt();
               include "bienthesize/addbt.php";
               break;
          case 'sua-bt':
               if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $bt = loadone_bt($_GET['id']);
               }
               // $listsanpham = loadall_sanpham();
               $listbt = loadall_bt();
               include "bienthesize/updatebt.php";
               break;
          case 'update-bt':
               if (isset($_POST['capnhat'])) {
                    $id_sp = $_POST['id_sp'];
                    $size = $_POST['size'];
                    $soluong = $_POST['soluong'];
                    $id = $_POST['id'];
                    $listbt = update_bt($id, $id_sp, $size, $soluong);
                    echo '<script>alert("Bạn đã cập nhật biến thể thành công.");</script>';
               }
               $listbt = loadall_bt();
               include "bienthesize/listbienthe.php";
               break;

          case 'list-bt':
               if (isset($_POST['listok']) && ($_POST['listok'])) {
                    $kyw = $_POST['kyw'];
                    $iddm = $_POST['iddm'];
               } else {
                    $kyw = '';
                    $iddm = 0;
               }
               $listbt = loadall_bt();
               include "bienthesize/listbienthe.php";
               break;

          case 'xoa-bt':
               if (isset($_GET['id']) && $_GET['id'] != "") {
                    delete_bt($_GET['id']);
               }
               $listbt = loadall_bt();
               include "bienthesize/listbienthe.php";
               break;
          case 'thongke':
               $listthongke = loadall_thongke();
               $listsptop = loadall_sptop();
               include "thongke/list.php";
               break;
          case 'bieudo':
               $listthongke = loadall_thongke();
               include "thongke/thongkesanpham.php";
               break;
          case 'bieudo1':
               $listsptop = loadall_sptop();
               include "thongke/bieudo.php";
               break;
          case "chart":
               include "chart.php";
               break;
     }
} else {
     include "home.php";
}
include "footer.php";
