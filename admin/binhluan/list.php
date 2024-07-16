

<body>
    <div id="main">
        <div class="page-heading">
            <section class="section">
                <div class="row" id="table-bordered">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">DANH SACH Bình Luận </h4>
                            </div>
                            <div class="card-content">
                                <!-- table bordered -->
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>ID</th>
                                                <th>Tài khoản</th>
                                                <th>Nội dung</th>
                                                <th>Ngày bình luận</th>
                                                
                                            </tr>
                                        </thead> 
                                        <tbody>
                                            <?php foreach ($listbinhluan as $binhluan) {
                                                extract($binhluan);
                                                $xoabl = "index.php?act=xoa-bl&id=" . $id_bl;
                                                echo '
                                <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>' . $id_bl. '</td>
                                    <td>' . $ten_tk . '</td>
                                    <td>' . $noidung . '</td>
                                    <td>' . $ngaybinhluan . '</td>
                                    <td>
                                        <a href="' . $xoabl . '" onclick="return confirm(\'Bạn có chắc chắn muốn xóa?\');">
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
