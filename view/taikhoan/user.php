        <!-- Star_Main -->

        <div class="main">
            <div class="content">
                <div class="main_ttus">
                    <div class="ct_user">
                        <div class="boxrht">
                            <div class="cont_br">
                                <div class="cnt_tt">
                                    <div class="user_h1">
                                        <?php
                                        if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
                                            extract($_SESSION['user']);
                                        }
                                        // $hinhpath = "uploads/" . $hinh;
                                        // if (is_file($hinhpath)) {
                                        //     $hinh = "<img src='" . $hinhpath . "'>";
                                        // } else {
                                        //     $hinh = "không hình ảnh";
                                        // }
                                        ?>
                                        <div class="tl">
                                            <p class="name_user">
                                                <?= $ten_tk ?>
                                            </p>
                                        </div>
                                        <!-- <div class="tezzt">
                                    <img src="<?= $hinh ?>" class="anhdd" alt="">
                                </div> -->
                                    </div>
                                </div>
                                <hr>
                                <?php
                                if (isset($_SESSION['user'])) {
                                    extract($_SESSION['user']);
                                ?>
                                    <div class="user_ds">
                                        <p><a href="index.php?act=user">Thông tin tài khoản</a></p>
                                        <!-- <p><a href="user.html">Thông tin tài khoản</a></p> -->
                                        <?php if ($vaitro == 1) {
                                        ?>
                                            <p><a href="admin/index.php">Đăng nhập Admin</a></p>
                                        <?php } ?>

                                        <p><a href="index.php?act=lsmh">Quản lý đơn hàng</a></p>
                                        <p><a href="#">Sản phẩm yêu thích</a></p>
                                        <p><a href="index.php?act=doimk">Đổi mật khẩu</a></p>
                                        <p><a href="index.php?act=quenmk">Quên mật khẩu</a></p>
                                        <p><a href="#">Hỏi đáp sản phẩm</a></p>
                                        <p><a href="#">Hỗ trợ-FF</a></p>
                                        <p><a href="index.php?act=dangxuat">Đăng xuất</a></p>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>
                        <div class="cach"></div>
                        <div class="boxlef">
                            <h2 class="user_tt">
                                Tài khoản của tôi
                            </h2>
                            <div class="content_boxlt">

                                <div class="form">
                                    <?php
                                    if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
                                        extract($_SESSION['user']);
                                    }
                                    $hinhpath = "uploads/" . $hinh;
                                    if (is_file($hinhpath)) {
                                        $hinh = "<img src='$hinhpath' alt='' >";
                                    } else {
                                        $hinh = "Không có hình ảnh";
                                    }
                                    ?>
                                    <!-- <form action="index.php?act=edit_taikhoan" method="post" enctype="multipart/form-data"> -->
                                    <div class="user_h1">
                                        <div class="tezzt">
                                            <div class="tezzt">
                                                <img src="<?= $hinhpath ?>" alt="">
                                            </div>
                                        </div>
                                        <label for="">Username:</label>
                                        <input class="ip_dk" type="text" name="user" value="<?= $ten_tk ?>"><br>
                                        <!-- <label for="">Họ và tên:</label>
                                        <input class="ip_dk" type="text" name="hotenuser" value="<?= $hotenur ?>"><br> -->
                                        <label for="">Email:</label>
                                        <input class="ip_dk" type="text" name="email" value="<?= $email ?>"><br>
                                        <label for="">Số điện thoại:</label>
                                        <input class="ip_dk" type="text" name="sdt" value="<?= $sdt ?>"><br>
                                        <label for="">Địa chỉ:</label>
                                        <input class="ip_dk" type="text" name="diachi" value="<?= $diachi ?>"><br>
                                        <label for="">Mật khẩu:</label>
                                        <input class="ip_dk" type="password" name="pass" value="<?= $pass ?>"><br>
                                        <input type="hidden" name="id_tk" value="<?= $id_tk ?>">
                                        <div class="bnt_user">
                                            <a href="index.php?act=edit_taikhoan"><input type="submit" class="chien" name="capnhat" value="Cập nhật tài khoản"></a>
                                            <div class="cah"></div>
                                            <input type="submit" class="chien" name="doimk" value="Đổi mật khẩu">
                                        </div>
                                        <!-- </form> -->
                                        <?php
                                        if (isset($thongbao) && ($thongbao) != "") {
                                            echo $thongbao;
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>