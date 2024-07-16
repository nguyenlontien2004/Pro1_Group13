<!-- Star_Main -->
<!-- <?php
        session_start();
        ?> -->

<div class="main">
    <div class="content">
        <div class="main_ttus">
            <div class="tile_cart">
            </div>
            <div class="ct_user20">
                <div class="boxlef235">
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
                                    $xoasp = '<a href="index.php?act=delcart&i=' . $i . '"><i class="fa-regular fa-trash-can"></i></a>';
                                    foreach ($_SESSION['giohang'] as $item) {
                                        $tt = $item[3] * $item[4];
                                        $tong += $tt;
                                        echo '
                                        <tbody>
                                                <tr class="tbody">
                                                    <td class="cart_pr_price23">
                                                        <div class="cnt_pr78">
                                                            <input class="bnt_choose" type="checkbox" name="luachon" id="">
                                                        </div>
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
                                                                Size: <span class="tt_cr_pr">' . $item[5] . '</span>
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
                                                        <input id="quantity-input-1" type="number" data-id="' . $i . '" data-unit-price="' . $item[3] . '" data-name="' . $item[1] . '" name="cart[e2230b853516e7b05d79744fbd4c9c13][qty]" value="' . $item[4] . '" title="Qty" class="input-text qty text input-quantity" size="4">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="cart_items_price6">
                                                        <span class="woocommerce-Price-currencySymbo total-product-' . $i . '">' . $tt . '</span>VND
                                                        </div>
                                                    </td>
                                                    <td>
                                                    <a href="index.php?act=delcart&i=' . $i . '">Xóa</a>
                                                    </td>

                                                </tr>
                                            </tbody>
                                            
                                         ';
                                        $i++;
                                    }
                                    echo '<tr class="tbody">
                                    <td class="cart_pr_price23"  conlspan="5">
                                       
                                    </td>
                                    
                                </tr>';
                                    echo '  </table>';
                                }   ?>
                            </form>
                        </div>
                    </div>
                    <?php
                    // if (isset($_SESSION['giohang']) && !empty($_SESSION['giohang'])) {
                    //     // Chuyển đổi giỏ hàng thành chuỗi JSON để lưu vào cơ sở dữ liệu
                    //     $giohang_json = json_encode($_SESSION['giohang']);

                    //     // Lưu vào cơ sở dữ liệu với user_id là thông tin đăng nhập của người dùng
                    //     $ten_tk; // Thay thế bằng thông tin đăng nhập của người dùng
                    //     $sql = "UPDATE taikhoan SET giohang = '$giohang_json' WHERE ten_tk = '$ten_tk'";
                    //     pdo_execute($sql);
                    // }
                    // 
                    ?>
                    // <?php
                        // $sql = "SELECT giohang FROM taikhoan WHERE ten_tk = '$ten_tk'";
                        // $result = pdo_query($sql);

                        // if ($result) {
                        //     // Chuyển đổi chuỗi JSON thành mảng để lưu vào session
                        //     $_SESSION['giohang'] = json_decode($result['giohang']);
                        // }
                        ?>




                    <div class="bnt_dathang2">
                        <div class="ttad">
                            <a href="index.php"><input class="bnt_dk5" type="submit" value="Tiếp tục mua hàng"></a>
                        </div>
                        <div class="tt_tt">
                            <a href="index.php?act=thanhtoan23"><input class="bnt_dk5" name="thanhtoan" type="submit" value="Đặt hàng"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        $('.input-quantity').on('change', function() {
            var quantity = $(this).val();
            if (quantity < 1) {
                quantity = 1;
                $(this).val(quantity);
            }
            var unitPrice = $(this).data('unit-price');
            var amount = quantity * unitPrice;
            var id = $(this).data('id');
            $('.total-product-' + id).text(amount);
            var params = {
                addtocart: 1,
                id: '',
                name: $(this).data('name'),
                img: '',
                soluong: quantity,
                type: 'update',
                price: unitPrice
            };
            $.post("index.php?act=addcart", params, function(data, status) {

            });
        });
    });
</script>

<!-- End_main -->