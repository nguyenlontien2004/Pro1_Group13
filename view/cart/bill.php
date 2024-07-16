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
                                                                                <span class="woocommerce-Price-currencySymbol">VND</span>' . $ngaydathang . '</span>
                                                                        </strong>
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
<style>
    /* Style for the order review heading */
#order_review_heading {
    color: #333;
    font-size: 24px;
    margin-bottom: 20px;
}

/* Style for the order review table */
.shop_table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

.shop_table th,
.shop_table td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: left;
}

/* Style for the order total and subtotal */
.cart-subtotal th,
.order-total th {
    font-weight: bold;
}

/* Style for the payment form */
.woocommerce-checkout-payment {
    margin-top: 20px;
}

/* Style for the order details */
.cart-collaterals {
    background-color: #f9f9f9;
    padding: 20px;
}

/* Style for the form inputs */
.woocommerce-checkout-payment form input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.woocommerce-checkout-payment form input[type="submit"]:hover {
    background-color: #0056b3;
}

/* Responsive styles for smaller screens */
@media screen and (max-width: 768px) {
    .woocommerce-checkout-payment form {
        width: 100%;
    }
}

</style>