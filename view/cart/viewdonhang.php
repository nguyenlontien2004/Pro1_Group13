<!-- Star_Main -->
<div class="main">
    <div class="content">
        <div class="main_ttus">
            <div class="ct_user23">
                <div class="boxrht234">
                    <div class="cont_br2">
                        <div class="cnt_tt">
                            <div class="tl">
                                <h3 class="name_user2" style="text-align: center;">Thông tin đặt hàng</h3>
                            </div>
                        </div>
                        <div class="boxlef273">
                            <div class="content_cart">
                                <div class="cnt_tt">
                                    <div class="tl">
                                        <h3 class="name_user3" style="text-align: left; margin-left: 30px; margin-bottom:0px ;">Sản
                                            phẩm</h3>
                                    </div>
                                </div>
                                <div class="table_cart222">
                                    <form action="index?act=" method="post">
                                        <?php
                                        if ((isset($_SESSION['giohang'])) && (count($_SESSION['giohang']) > 0)) {
                                            echo '
                                 
                                  <table class="cr_table22">
                                          <thead class="tescam2">
                                              <tr class="thead2">
                                                  <th class="th_gh12"></th>
                                                  <th class="th_gh123">Tên sản phẩm</th>
                                                  <th class="th_gh12">Giá Tiền</th>
                                                  <th class="th_gh12">Số lượng</th>
                                                  <th class="th_gh12">Tổng tiền</th>
                                                  <th class="th_gh12"></th>
                                              </tr>
                                          </thead>';
                                            $i = 0;
                                            $tong = 0;
                                            foreach ($_SESSION['giohang'] as $item) {
                                                $tt = $item[3] * $item[4];
                                                $tong += $tt;
                                                echo '
                                      <tbody>
                                              <tr class="tbody">
                                                  <td class="cart_pr_price23">
                                                  </td>
                                                  <td class="td_gh3_tess">
                                                  <div class="cart_pr_items2">
                                                      <div class="cart_pr_items_img">
                                                          <a href="#">
                                                              <!-- Link sản phẩm chi tiết -->
                                                              <img src="uploads/' . $item[2] . '" alt="" style=" width: 150px;
                                                                  height: 150px;">
                                                          </a>
                                                      </div>
                                                  </div>
                                                  <div class="cart_pr_items_content">
                                                      <a href="#">
                                                          <!-- Linh sản phẩm\ -->
                                                          <h3 class="cart_pr_items_title">
                                                          ' . $item[1] . '
                                                          </h3>
                                                      </a>
                                                      <div class="cart_pr_items_desciption">
                                                          <!-- <p>
                                                              Màu sắc: <span class="tt_cr_pr">Màu be</span>
                                                          </p> -->
                                                          <p>
                                                              Size: <span class="tt_cr_pr">38</span>
                                                          </p>
                                                      </div>
                                                  </div>
                                                    </td>
                                                 
                                                  <td class="cart_pr_price2">
                                                      <div class="cnt_price">
                                                          <p>' . $item[3] . '</p>
                                                          <p class="cart_sale">
                                                              (-30%)
                                                          </p>
                                                      </div>
                                                  </td>
                                                  <td class="cart_pr_price3">
                                                      <div class="bnt_dl12">
                                                      <input type="number" value="' . $item[4] . '">
                                                      </div>
                                                  </td>
                                                  <td>
                                                      <div class="cart_items_price6">
                                                          <span>' . $tt . '</span>
                                                      </div>
                                                  </td>
                                              
                                              </tr>
                                          </tbody>
                                          
                                       ';
                                                $i++;
                                            }
                                            echo '  </table>';
                                        }   ?>
                                    </form>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="main_dagnhap">
                            <div class="content_form">
                                <div class="form">
                                    <div class="content_dn">
                                        <div class="cnt_tt">
                                            <div class="tl">
                                                <h3 class="name_user">Thông tin khách hàng</h3>
                                            </div>
                                        </div>
                                        <form action="index.php?act=thanhtoan" method="post">
                                            <input type="hidden" name="tongdonhang" value="<?= $tong ?>">
                                            <label for="">Người đặt hàng:</label>
                                            <input class="ip_dk" type="text" require name="hoten" id="" placeholder="Họ và Tên...">
                                            <br>
                                            <label for="">Email:</label>
                                            <input class="ip_dk" type="text" require name="email" id="" placeholder="Email...">
                                            <br>
                                            <label for="">Số điện thoại:</label>
                                            <input class="ip_dk" type="text" require name="tel" id="" placeholder="Số điện thoại...">
                                            <br>
                                            <label for="">Địa chỉ:</label>
                                            <input class="ip_dk" type="text" require name="address" id="" placeholder="Địa chỉ...">
                                            <br>
                                            <div class="bnt_dathang2">
                                                <input class="bnt_dk5" type="submit" name="thanhtoan" value="Đặt hàng">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <form action="/view/cart/vnpay_create_payment.php" method="post">
                                    <div class="content_dn">
                                        <div class="cnt_tt">
                                            <div class="tl">
                                                <h3 class="name_user">Phương thức thanh toán</h3>
                                            </div>
                                        </div>
                                        <div class="pttt">
                                            <div class="vt">
                                                <input type="radio" checked="true" id="bankCode3" name="bankCode" value="NCB">
                                                <label for="bankCode3">Thanh toán qua thẻ ATM</label><br>
                                            </div>
                                            <div class="td">
                                                <input type="radio" id="bankCode1" name="bankCode" value="">
                                                <label for="bankCode1">Cổng thanh toán VNPAYQR</label><br>
                                            </div>
                                            <div class="ol">
                                                <input type="radio" id="bankCode4" name="bankCode" value="INTCARD">
                                                <label for="bankCode4">Thanh toán qua thẻ quốc tế</label><br>
                                            </div>
                                        </div>
                                        <div class="user_ds">
                                            <div class="cnt_tt">
                                                <div class="tl">
                                                    <h3 class="name_user">Tổng tiền</h3>
                                                </div>
                                            </div>
                                            <div class="sum_sp3">
                                                <div class="til_sum3">
                                                    <p>Thành tiền</p>
                                                </div>
                                                <div class="nmer2">
                                                    <p><?php echo $tong  ?></p>
                                                </div>
                                                <div class="form-group">
                                                    <input hidden type="text" name="amount" value="<?php echo $tong ?>">
                                                    <input hidden type="text" name="hoten" value="<?php echo $ten_tk ?>">
                                                    <input hidden type="text" name="email" value="<?php echo $email ?>">
                                                    <input hidden type="text" name="address" value="<?php echo $diachi ?>">
                                                    <input hidden type="text" name="tel" value="<?php echo $sdt ?>">
                                                    <!-- <input hidden type="text" name="tel" value="<?php echo $vaitro ?>"> -->
                                                </div>
                                            </div>
                                            <div class="bnt_dathang2">
                                                <input type="submit" name="redirect" class="btn bnt_dk5 btn-default" value="Thanh toán VNPAY">
                                            </div>
                                            <!-- <div class="bnt_dathang2">
                                                    <input class="bnt_dk5" type="submit" value="Đặt hàng">
                                                </div> -->
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>