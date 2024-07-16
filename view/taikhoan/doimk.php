        <!-- Star_Main -->
        <div class="main">
            <div class="content">
                <div class="main_ttus">
                    <div class="ct_user">
                        <div class="boxrht">
                            <div class="cont_br">
                                <div class="cnt_tt">
                                    <div class="user_h1">
                                        <!--  -->
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
                                        <p><a href="#">Quản lý đơn hàng</a></p>
                                        <p><a href="#">Sản phẩm yêu thích</a></p>
                                        <p><a href="index.php?act=doimk">Đổi mật khẩu</a></p>
                                        <p><a href="index.php?act=quenmk">Quên mật khẩu</a></p>
                                        <p><a href="#">Hỏi đáp sản phẩm</a></p>
                                        <p><a href="#">Hỗ trợ-FF</a></p>
                                        <p><a href="index.php?act=dangxuat">Đăng xuất</a></p>
                                    </div>

                            </div>
                        </div>
                        <div class="cach"></div>
                        <div class="boxlef">
                            <h2 class="user_tt">
                                Đổi mật khẩu
                            </h2>
                            <div class="content_boxlt">
                                <div class="form">
                                    <form action="index.php?act=doimk" method="post">
                                        <label for="">Nhập mật khẩu cũ:</label>
                                        <input class="ip_dk" type="password" name="passold" placeholder="pass">
                                        <input class="ip_dk" type="hidden" name="pass" id="" value="<?= $pass ?>">
                                        <br>
                                        <label for="">Nhập mật mới:</label>
                                        <input class="ip_dk" type="password" name="passnew" id="" placeholder="Mật khẩu mới lần 1..."><br>
                                        <label for="">Nhập mật mới lần 2:</label>
                                        <input class="ip_dk" type="password" name="passnew2" id="" placeholder="Mật khẩu mới lần 2..."><br>
                                        <input type="hidden" name="id_tk" value="<?= $id_tk ?>">
                                        <div class="quen_mk">
                                            <?php
                                            if (isset($thongbao) && ($thongbao) != "") {
                                                echo $thongbao;
                                            } ?>
                                        </div>
                                        <div class="bnt_user">
                                            <input type="submit" class="chien" name="doimk" value="Cập nhật">
                                            <div class="cah"></div>
                                            <input type="reset" class="chien" name="res" value="Nhập lại">
                                        </div>
                                    </form>
                                </div>
                            <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>