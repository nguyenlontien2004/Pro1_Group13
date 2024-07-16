<div class="main">
    <div class="content">
        <div class="cnt_fogh">
            <div class="tile_cart">
            </div>
            <div class="boxlef_gh">
                <div class="content_cart">
                    <div class="table_cart">
                        <form action="index.php?act=" method="post">
                            <?php
                            if ((isset($_SESSION['giohang'])) && (count($_SESSION['giohang']) > 0)) {
                                echo '
                                   
                                    <table class="cr_table">
                                        <thead>
                                            <tr class="thead">
                                            <th class="th_gh1">STT</th>
                                                <th class="th_gh1">Tên sản phẩm</th>
                                                <th class="th_gh1">Hình</th>
                                                <th class="th_gh1">Giá sản phẩm</th>
                                                <th class="th_gh1">Số lượng</th>
                                                <th class="th_gh1">Tổng tiền</th>
                                                <th class="th_gh1">Chức năng</th>
                                            </tr>
                                        </thead>';
                                $i = 0;
                                $tong = 0;
                                foreach ($_SESSION['giohang'] as $item) {
                                    $tt = $item[3] * $item[4];
                                    echo '
                                        <tbody>
                                            <tr class="tbody">
                                            <td >
                                            ' . ($i + 1) . '    
                                            </td>
                                                <td >
                                                ' . $item[1] . '    
                                                </td>
                                                <td >
                                                <img src="uploads/' . $item[2] . '" alt="" width="100">     
                                                </td>
                                                <td >
                                                ' . $item[3] . '
                                                </td>
                                                <td >
                                                <input type="number" value="' . $item[4] . '">
                                                </td>
                                                <td >
                                                ' . $tt . '
                                                </td>
                                                <td >
                                                <a href="index.php?act=delcart&i=' . $i . '">xóa</a>
                                                </td>

                                               

                                            </tr>
                                        </tbody>';
                                    $i++;
                                }
                                echo '  </table>';
                            } ?>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bnt_next_buypr">
        <h3>Thông tin đặt hàng</h3>
        <form action="index.php?act=thanhtoan" method="post">
            <input type="hidden" name="tongdonhang" value="<?= $tong ?>">
            <table>
                <tr>
                    <td><input type="text" name="hoten" placeholder="Nhập họ tên" required></td>
                </tr>
                <tr>
                    <td><input type="text" name="address" placeholder="Nhập địa chỉ" required></td>
                </tr>
                <tr>
                    <td><input type="email" name="email" placeholder="Nhập email" required></td>
                </tr>
                <tr>
                    <td><input type="text" name="tel" placeholder="Nhập số điện thoại" required></td>
                </tr>
                <tr>
                    <td>Phương thức thanh toán <br>
                        <input type="radio" name="pttt" value="1"> Thanh toán khi nhận hàng <br>
                        <input type="radio" name="pttt" value="2"> Thanh toán chuyển khoản <br>
                        <input type="radio" name="pttt" value="3"> Thanh toán ví MoMo <br>
                        <input type="radio" name="pttt" value="4"> Thanh toán online <br>
                    </td>

                </tr>
                <tr>
                    <td><input type="submit" value="thanhtoan" name="thanhtoan"></td>
                </tr>
            </table>
        </form>

    </div>

</div>
<!-- Star_Main -->

<div class="main">
    <div class="content">
        <div class="main_ttus">
            <div class="tile_cart">
                <h2 class="user_tt">
                    <p class="cart">Giỏ hàng của bạn có : <span style="color: red;">2 sản
                            phẩm</span>
                    </p>
                </h2>
            </div>
            <div class="ct_user23">
                <div class="boxlef23">
                    <div class="content_cart">
                        <div class="table_cart">
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
                                        echo '

                                         <tbody>
                                            <tr class="tbody">
                                            <td class="cart_pr_price23">
                                                <div class="cnt_pr78">
                                                    <input class="bnt_choose" type="checkbox" name="" id="">
                                                </div>
                                            </td>

                                            <td class="td_gh2">
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
                                                            Giày GUCCi cao cấp chấp mọi thách thức.
                                                        </h3>
                                                    </a>
                                                    <div class="cart_pr_items_desciption">
                                                        <p>
                                                            Size: <span class="tt_cr_pr">38</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="cart_pr_price2">
                                                <div class="cnt_price">
                                                    <p>-2360.3322</p>
                                                    <p class="cart_sale">
                                                        (-30%)
                                                    </p>
                                                </div>
                                            </td>
                                            <td class="cart_pr_price3">
                                                <div class="bnt_dl12">
                                                    <input class="bnt_adtr21" id="giam-sl" type="button" value="-">
                                                    <input class="text_tt2" id="quantityInput" type="text" name="" id="" value="1" min="0">
                                                    <input class="bnt_adtr23" id="tang-sl" type="button" value="+">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="cart_items_price6">
                                                    <span>989.928</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="bnt_cn_cart">
                                                    <a href=""><i class="fa-regular fa-trash-can"></i></a>
                                                </div>
                                            </td>

                                        </tr>
                                    </tbody>
                                    ';
                                    }
                                    echo '  </table>';
                                }   ?>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="boxrht23">
                    <div class="cont_br2">
                        <div class="cnt_tt">
                            <div class="tl">
                                <h3 class="name_user">Tổng tiền giỏ hàng</h3>
                            </div>
                        </div>

                        <div class="user_ds">
                            <div class="sum_sp">
                                <div class="til_sum">
                                    <p>Tổng sản phẩm:</p>
                                </div>
                                <div class="nmer">
                                    <p>2</p>
                                </div>
                            </div>
                            <div class="sum_sp2">
                                <div class="til_sum2">
                                    <p>Tổng tiền hàng</p>
                                </div>
                                <div class="nmer2">
                                    <p>15.000.000đ</p>
                                </div>
                            </div>
                            <div class="sum_sp3">
                                <div class="til_sum3">
                                    <p>Thành tiền</p>
                                </div>
                                <div class="nmer2">
                                    <p>15.000.000đ</p>
                                </div>
                            </div>

                            <div class="bnt_dathang2">
                                <input class="bnt_dk5" type="submit" value="Đặt hàng">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>

<!-- End_main -->


<h3 id="order_review_heading">Mã đơn hàng:<?= $iddh ?></h3>
<div class="woocommerce-checkout-review-order" id="order_review">
    <div class="order-review-wrapper">
        <h3 class="order_review_heading">Your Order</h3>
        <?php
        if (isset($_SESSION['iddh']) && ($_SESSION['iddh'] > 0)) {
            $getshowcart =  getshowcart($iddh);
            if ((isset($getshowcart) && count($getshowcart) > 0)) {
                echo '
                       <table class="shop_table woocommerce-checkout-review-order-table">
                           <thead>
                               <tr>
                                   <th class="product-name">Product</th>
                                   <th class="product-total">Total</th>
                                   <th class="product-total">Hình</th>
       
                               </tr>
                           </thead>';
                $i = 0;
                $tong = 0;
                foreach ($getshowcart as $item) {
                    $tt = $item['soluong'] * $item['dongia'];
                    $tong = $tong + $tt;

                    echo '   <tbody>
                               <tr class="cart_item">
                                   <td class="product-name">
                                       <strong class="product-quantity">' . $item['soluong'] . ' ×</strong>' . $item['tensp'] . ';
                                   </td>
                                   <td class="product-total">
                                       <span class="woocommerce-Price-amount amount">
                                           <span class="woocommerce-Price-currencySymbol">VND</span>' . $item['dongia'] . '</span>
                                   </td>
                                   <td class="product-total">
                                   <img src="uploads/' . $item['img'] . '" alt="" width = "100">
                                   </td>
                               </tr>
                               
                              
                           </tbody>';
                    $i++;
                }
                echo '
                           <tfoot>
                               <tr class="cart-subtotal">
                                   <th>Subtotal</th>
                                   <td>
                                       <span class="woocommerce-Price-amount amount">
                                           <span class="woocommerce-Price-currencySymbol"></span></span>
                                   </td>
                               </tr>
                               <tr class="order-total">
                                   <th>Total</th>
                                   <td>
                                       <strong>
                                           <span class="woocommerce-Price-amount amount">
                                               <span class="woocommerce-Price-currencySymbol">VND</span>' . $tong . '</span>
                                       </strong>
                                   </td>
                               </tr>
                           </tfoot>';
                echo         '</table>';
            }
        } else {
            echo "giỏ hàng không tồn tại";
        }
        ?> <!-- /.woocommerce-checkout-review-order-table -->
        <div class="woocommerce-checkout-payment" id="payment">

            <div class="cart-collaterals">
                <?php if (isset($_SESSION['iddh']) && ($_SESSION['iddh'] > 0)) {
                    $getorderinfor = getorderinfor($_SESSION['iddh']);
                    if (count($getorderinfor) > 0) {
                ?>
                        <form action="index.php?act=dathang" method="post">
                            <h3>Thông tin đặt hàng</h3>
                            <input type="hidden" name="tongdonhang" value="<?= $tong ?>">
                            <table>
                                <tr>
                                    <td> Mã đơn hàng : <?= $getorderinfor[0]['madh'] ?> <br></td>
                                </tr>
                                <tr>
                                    <td> Tên người nhận : <?= $getorderinfor[0]['hoten'] ?> <br></td>
                                </tr>
                                <tr>
                                    <td> Địa chỉ giao hàng : <?= $getorderinfor[0]['address'] ?> <br></td>
                                </tr>
                                <tr>
                                    <td> Email người nhận <?= $getorderinfor[0]['email'] ?> <br></td>
                                </tr>
                                <tr>
                                    <td> Số điện thoại người nhận: <?= $getorderinfor[0]['tell'] ?> <br></td>
                                </tr>
                                <tr>
                                    <td> Phương thức thanh toán:
                                        <?php switch ($getorderinfor[0]['pttt']) {
                                            case '1':
                                                $txtmess = "Thanh toán khi nhận hàng ";
                                            case '2':
                                                $txtmess = "Thanh toán chuyển khoản";
                                            case '3':
                                                $txtmess = "Thanh toán ví MoMo";
                                            case '4':
                                                $txtmess = "Thanh toán online";
                                                break;
                                            default:
                                                $txtmess = "Quý khách chưa chọn pttt";
                                                break;
                                        }
                                        echo $txtmess; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="submit" value="Đặt Hàng" name="dathang"></td>
                                </tr>
                            </table>
                        </form>
                <?php
                    }
                } ?>
            </div>
        </div>
        <!-- /.woocommerce-checkout-payment -->
    </div>
    <!-- /.order-review-wrapper -->
</div>
<!-- .woocommerce-checkout-review-order -->
</form>
<!-- .woocommerce-checkout -->
</div>
<!-- .woocommerce -->
</div>
<!-- .entry-content -->
</div>
<!-- #post-## -->
</main>
<!-- #main -->
</div>
<!-- #primary -->
</div>
<!-- .row -->
</div>
<!-- .col-full -->
</div>