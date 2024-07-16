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
                                                    <td>
                                                        <div class="bnt_cn_cart">
                                                        ' . $xoasp . '
                                                        </div>      
                                                    </td>

                                                </tr>
                                            </tbody>
                                            
                                         ';
                                                  $i++;
                                             }
                                             echo '<tr class="tbody">
                                    <td class="cart_pr_price23"  conlspan="5">
                                       
                                    </td>
                                    
                                    <td>
                                        <div class="cart_items_price6">
                                            <span>' . $tong . '</span>
                                        </div>
                                    </td>
                                    
                                </tr>';
                                             echo '  </table>';
                                        }   ?>
                                   </form>
                              </div>
                         </div>
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

<!-- End_main -->