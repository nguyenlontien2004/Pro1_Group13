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
                                <h4 class="card-title">DANH SÁCH TÀI KHOẢN</h4>
                            </div>
                            <div class="card-content">
                                <!-- table bordered -->
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>ID</th>
                                                <th>Tên tài khoản</th>
                                                <th>Password</th>
                                                <th>Email</th>
                                                <th>Số điện thoại</th>
                                                <th>Vai trò</th>
                                         
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($listtaikhoan as $taikhoan) {
                                                extract($taikhoan);
                                                $xoatk = "index.php?act=xoa-tk&id=" . $id_tk;
                                                echo '
                                <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>' . $id_tk . '</td>
                                    <td>' . $ten_tk	 . '</td>
                                    <td>' . $pass . '</td>
                                    <td>' . $email . '</td>
                                    <td>' . $sdt. '</td>
                                    <td>' . $diachi . '</td>
                                    <td>' . $vaitro . '</td>
                                    <td>
                                        <a href="' . $xoatk. '" onclick="return confirm(\'Bạn có chắc chắn muốn xóa?\');">
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