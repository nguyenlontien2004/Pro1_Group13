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
                        <?php } ?>
                    </div>
                </div>
                <div class="cach"></div>
                <div class="boxlef">
                    <h2 class="user_tt">
                        Lịch sử đặt hàng
                    </h2>
                    <?php foreach ($listhoadon as $bill) {
                        extract($bill);
                    ?>
                        <table border="1" class="cr_table228">

                            <thead class="tescam288">
                                <tr>
                                    <th class="th_gh1223" colspan="1"> ID đơn hàng:<?= $bill['id'] ?></th>
                                    <th class="th_gh1223" colspan="2"> Ngày đặt hàng:<?= $bill['ngaydathang'] ?></th>
                                </tr>
                                <tr class="thead234">
                                    <th class="th_gh122">User</th>
                                    <th class="th_gh122">Sản phẩm</th>
                                    <th class="th_gh122">Trạng thái</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="tbody">
                                    <td class="cart_pr_price222">
                                        <div class="cnt_price2222">
                                            <p><?= $bill['hoten'] ?></p>

                                        </div>
                                    </td>
                                    <td class="td_gh3_tess23">
                                        <?php foreach ($bill['products'] as $product) { ?>
                                            <div class="cart_pr_items_content22">
                                                <a href="#">
                                                    <!-- Linh sản phẩm\ -->
                                                    <h3 class="cart_pr_items_title2222">
                                                        <?= $product['tensp'] ?>
                                                    </h3>
                                                </a>
                                            </div>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <div class="bnt_cn_cart22">
                                            <?= $bill['trangthai'] ?>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <form action="index.php?act=huydn" method="POST">
                                            <div class="huydh">
                                                <input type="hidden" name="id" value="<?= $bill['id'] ?>">
                                                <input type="submit" name="capnhat" value="Hủy đơn hàng">
                                            </div>
                                        </form>
                                    </td>
                                    <td>
                                        <div class="huydh">
                                            <input type="submit" name="capnhat" value="Chi tiết đơn hàng">
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Star_Main -->