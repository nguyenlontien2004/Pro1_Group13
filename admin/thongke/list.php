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
                                <h4 class="card-title">DANH SÁCH BIẾN THỂ SẢN PHẨM</h4>
                            </div>
                            <div class="card-content">
                                <!-- table bordered -->
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
                                        <thead>
                                            <tr>

                                                <th>MÃ DANH MỤC</th>
                                                <th>TÊN DANH MỤC</th>
                                                <th>SỐ LƯỢNG</th>
                                                <th>GIÁ CAO NHẤT</th>
                                                <th>GIÁ THẤP NHẤT</th>
                                                <th>GIÁ TRUNG BÌNH</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($listthongke as $tk) {
                                                extract($tk);

                                                echo '<tr>
                 
                       <td>' . $madm . '</td>
                       <td> ' . $tendm . '</td>
                       <td> ' . $countsp . '</td>
                       <td> ' . $maxprice . '</td>
                       <td> ' . $minprice . '</td>
                       <td> ' . $avgprice . '</td>
                        </tr>';
                                            }

                                            ?>

                                        </tbody>
                                    </table>
                                    <a href="index.php?act=bieudo"> <button type="submit" class="btn btn-primary" name="XEM BIỂU ĐỒ">Xem biểu đồ</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section">
                <div class="row" id="table-bordered">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">DANH SÁCH BIẾN THỂ SẢN PHẨM</h4>
                            </div>
                            <div class="card-content">
                                <!-- table bordered -->
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
                                        <thead>
                                            <tr>
                                                <th class="b">MÃ SẢN PHẨM</th>
                                                <th class="b">TÊN SẢN PHẨM</th>
                                                <th class="b">ẢNH SẢN PHẨM</th>
                                                <th class="b">LƯỢT BÁN</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($listsptop as $top) {
                                                extract($top);
                                                $hinhpath = "../uploads/" . $hinh;
                                                if (is_file($hinhpath)) {
                                                    $hinhsp = "<img src='$hinhpath' alt='' width='80'>";
                                                } else {
                                                    $hinhsp = "khong co hinh";
                                                }
                                                echo '<tr>
                    <th style="width:12%;">' . $id_sp . '</th>
                    <th>' . $ten_sp . '</th>
                    <th>' . $hinhsp . '</th>
                    <th>' . $luotban . '</th>
                </tr>';
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                    <a href="index.php?act=bieudo1"> <button type="submit" class="btn btn-primary" name="XEM BIỂU ĐỒ">Xem biểu đồ</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>