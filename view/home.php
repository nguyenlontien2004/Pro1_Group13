<!-- End header -->

<!-- Star_Main -->
<div class="main">
    <div class="content">
        <div class="header_botton">
            <div class="marquee">
                <marquee>
                    <p>Chào mừng bạn đến với cửa hàng FUNNY-FAMILY</p>
                </marquee>
            </div>
        </div>
        <div class="banner">
            <img id="anh" src="../img/banner/banner0.jpg" alt="" style="height: 350px; width: 1080px; object-fit: cover;">
        </div>
        <div class="ct_sp">
            <div class="tile_hn">
                <h2>Sản Phẩm Bán Chạy</h2>
            </div>
            <div class="content_top">
                <div class="row_pr">
                    <?php foreach ($sphot as $sp) {
                        extract($sp);
                        $hinhpath = "uploads/" . $hinh;
                        $linksp = "index.php?act=sanphamct&id_sp=" . $id_sp;
                        echo '  <form action="index.php?act=addcart" method="post"> <div class="rol_pr">
                        <a href="' . $linksp . '"> <img src="' . $hinhpath . '" alt=""><br>   </a>
                        <div class="cnt_nddp"><p>' . $ten_sp . ' </p><br></div>
                        <div class="cnt_prsp"> <span class="cnt_prsp3">Giá: ' . number_format($gia_sp) . 'đ</span>  <span class="cnt_prsp4">Lượt bán: ' . $luotban . '</span></div>
                             <div class="nut">
                             <input type="hidden" name="id" value="' . $sp['id_sp'] . '">
                             <input type="hidden" name="name" value="' . $sp['ten_sp'] . '">
                             <input type="hidden" name="img" value="' . $sp['hinh'] . '">
                             <input type="hidden" name="price" value="' . $sp['gia_sp'] . '">
                             <input type="submit" value="Mua Ngay" name="addtocart">
                                 <div class="tes"></div>
                                 <input type="submit" value="Thêm vào giỏ hàng" name="addtocart">
                             </div>
                         </div></form>';
                    } ?>

                </div>
            </div>

            <!-- <div class="phantranfid">
                <div class="pagination">
                    <a href="#">&laquo;</a>
                    <a class="active" href="index.php?act=lisdm&trang=' . $i . '">' . $i . '</a>
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="dangnhap.html">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#">6</a>
                    <a href="#">&raquo;</a>
                </div>
            </div> -->
        </div>
    </div>
    <div class="banner_two">
        <img class="banner_two2" src="img/banner/banner2.jpg" alt="" style="height: 350px; width: 1080px; object-fit: cover;">
    </div>
    <div class="content_botton">
        <div class="title">
            <h2>Có thể bạn cũng thích</h2>
        </div>
        <div class="content_top">
            <div class="row_pr">
                <?php foreach ($spnew2 as $sp2) {
                    extract($sp2);
                    $hinhpath = "uploads/" . $hinh;
                    $linksp = "index.php?act=sanphamct&id_sp=" . $id_sp;
                    echo ' <form action="index.php?act=addcart" method="post"> <div class="rol_pr">
                        <a href="' . $linksp . '"> <img src="' . $hinhpath . '" alt=""><br>   </a>
                        <div class="cnt_nddp"><p>' . $ten_sp . ' </p><br></div>
                        <div class="cnt_prsp"> <span class="cnt_prsp3">Giá: ' . $gia_sp . 'đ</span>  <span class="cnt_prsp4">Lượt bán: ' . $luotban . '</span></div>
                             <div class="nut">
                             <input type="hidden" name="id" value="' . $sp['id_sp'] . '">
                             <input type="hidden" name="name" value="' . $sp['ten_sp'] . '">
                             <input type="hidden" name="img" value="' . $sp['hinh'] . '">
                             <input type="hidden" name="price" value="' . $sp['gia_sp'] . '">
                             <input type="submit" value="Mua Ngay" name="addtocart">
                                 <div class="tes"></div>
                                 <input type="submit" value="Thêm vào giỏ hàng" name="addtocart">
                             </div>
                         </div>   </form>';
                } ?>

            </div>
        </div>
    </div>

    <div class="phantranfid_nut">
        <a class="all_pr" href="index.php?act=sanphamloc">Xem thêm</a>
    </div>
</div>

<script src="js/slide.js"></script>

<!-- End_main -->