<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alert - Mazer Admin Dashboard</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css7122?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/app.css">
    <link rel="shortcut icon" href="../assets/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <div id="main">
        <div class="page-heading">
            <section class="section">
                <div class="row" id="table-bordered">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">DANH SÁCH SẢN PHẨM </h4>
                            </div>
                            <div class="card-content">
                                <!-- table bordered -->
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
                                        <thead>
                                            <tr>

                                                <th>ID</th>
                                                <th>Tên Sản Phẩm </th>
                                                <th>Giá Sản Phẩm </th>
                                                <th>Hình Ảnh</th>
                                                <th>Tên danh mục</th>
                                                <th>Kích Cỡ</th>
                                                <th>Số Lượng</th>
                                                <th>Mô Tả</th>
                                                <th colspan="2">Chức Năng</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($listsanpham as $sanpham) {
                                                extract($sanpham);
                                                $suadm = "index.php?act=sua-sp&id=" . $id_sp;
                                                $xoadm = "index.php?act=xoa-sp&id=" . $id_sp;
                                                $hinhpath = "../uploads/" . $hinh;
                                                if (is_file($hinhpath)) {
                                                    $hinhsp = "<img src='$hinhpath' alt='' width='80'>";
                                                } else {
                                                    $hinhsp = "khong co hinh";
                                                }
                                                echo '
                                <tr>
                                
                                    <td>' . $id_sp . '</td>
                                    <td>' . $ten_sp . '</td>
                                    <td>' . $gia_sp . '</td>
                                    <td>' . $hinhsp . '</td>
                                    <td>' . $id_dm . '</td>
                                    <td>' . $size . '</td>
                                    <td>' . $soluong . '</td>
                                    <td>' . $mota . '</td>
                                    <td>
                                        <a href="' . $suadm . '">
                                            <button type="button" class="btn btn-primary">Sửa</button>
                                        </a>
                                        <a href="' . $xoadm . '" onclick="return confirm(\'Bạn có chắc chắn muốn xóa?\');">
                                            <button type="button" class="btn btn-primary">Xóa</button>
                                        </a>
                                    </td>
                                </tr>';
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>

</html>