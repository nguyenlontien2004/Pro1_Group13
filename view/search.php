<div class="main">
    <div class="content">
        <div class="tile_dm">
            <h2>Danh mục sản phẩm</h2>
        </div>
        <div class="dm_sp">
            <div class="boxlef2">
                <div class="title">
                    <h2>Lọc sản phẩm</h2>
                </div>
                <!-- <form action="#" method="post"> -->
                <div class="loc_sp">
                    <div class="row_loc">
                        <form action="index.php?act=search" method="post">
                            <input type="text" name="keysword" placeholder="Tìm kiếm ...">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                        <form action="index.php?act=sanphamloc" method="post">
                            <div class="rol_loc">
                                <div class="tile_locth">
                                    <div class="xamcj">
                                        <select name="id_dm" class="fas fa-search" style="width: 100%;" >
                                            <?php foreach ($dsdm as $dm) {
                                                extract($dm);
                                                echo ' <option class="xamcj" value="' . $id_dm . '">' . $ten_danhmuc . '</option> ';
                                                // echo ' <input class="xam" type="checkbox" name="id_dm" value="' . $id_dm . '">    ' . $ten_danhmuc . '<br>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="rol_loc_nut">
                                <input class="nut_loc" name="locok" type="submit" value="Lọc">
                                <input class="nut_loc" name="id_dm" type="submit" value="Bỏ lọc">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- </form> -->
            </div>
            <script>
                // Add active class to the current button (highlight it)
                var header = document.getElementById("locssp");
                var btns = header.getElementsByClassName("sizefl");
                for (var i = 0; i < btns.length; i++) {
                    btns[i].addEventListener("click", function() {
                        var current = document.getElementsByClassName("active");
                        current[0].className = current[0].className.replace(" active", "");
                        this.className += " active";
                    });
                }
            </script>
            <div class="boxrighr2">

                <div class="box_tile2">

                    <?php foreach ($listsanpham as $sploc11) {
                        extract($sploc11);
                        $hinhpath = "uploads/" . $hinh;
                        $linksp = "index.php?act=sanphamct&id_sp=" . $id_sp;
                        echo ' <form action="index.php?act=addcart" method="post"> <div class="rol_pr">
                        <a href="' . $linksp . '"> <img src="' . $hinhpath . '" alt=""><br>   </a>
                        <div class="cnt_nddp"><p>' . $ten_sp . ' </p><br></div>
                        <div class="cnt_prsp"> <span class="cnt_prsp3">Giá: ' . $gia_sp . 'đ</span>  <span class="cnt_prsp4">Lượt bán: ' . $gia_sp . '</span></div>
                             <div class="nut">
                             <input type="hidden" name="id" value="' . $sploc11['id_sp'] . '">
                             <input type="hidden" name="name" value="' . $sploc11['ten_sp'] . '">
                             <input type="hidden" name="img" value="' . $sploc11['hinh'] . '">
                             <input type="hidden" name="price" value="' . $sploc11['gia_sp'] . '">
                             <input type="submit" value="Mua Ngay" name="addtocart">
                                 <div class="tes"></div>
                                 <input type="submit" value="Thêm vào giỏ hàng" name="addtocart">
                             </div>
                         </div></form>';
                    } ?>

                </div>
                <!-- <div class="phantranfid">
                    <div class="pagination">
                        <a href="#">&laquo;</a>
                        <?php
                        for ($i = 1; $i <= $tongSoTrang; $i++) {
                            if ($page == $i) {
                                echo ' <a  class="active" href="index.php?act=sanphamloclisdm&trang=' . $i . '">' . $i . '</a>';
                            } else {
                                echo  '    
                 <a  href="index.php?act=sanphamloc&trang=' . $i . '">' . $i . '</a>
                    ';
                            }
                        }
                        ?>
                        <a href="#">&raquo;</a>
                    </div>
                </div> -->

                <!-- <div class="phantranfid">
    <div class="pagination">
        <a href="#">&laquo;</a>
        <a href="#" class="active">1</a>
        <a href="#">2</a>
        <a href="dangnhap.html">3</a>
        <a href="#">4</a>
        <a href="#">5</a>
        <a href="#">6</a>
       
    </div>
</div> -->
            </div>

        </div>
    </div>
    <hr>
</div>

<!-- End_main -->