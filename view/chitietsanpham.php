<?php
if (is_array($onesp)) {
    extract($onesp);
}

?>

<div class="main">
    <div class="content">
        <div class="contennt_top">
            <div class="row_cct">

                <div class="rol_ctt">
                    <?php
                    extract($onesp);
                    ?>
                    <div class="container_test">
                        <div class="sanpham">
                            <img src="uploads/<?php echo $hinh ?>" alt="" width="85%">
                        </div>

                    </div>
                </div>
                <div class="rol_ctt">
                    <div class="tt_top">
                        <div class="tt_top2">
                            <form action="index.php?act=addcart" method="post">
                                <div class="tile_pr">
                                    <p class="title_ctpr">
                                        <span><?php echo $ten_sp ?></span>
                                    </p>
                                </div>
                                <div class="pri_ce">
                                    <p class="price_ctpr">
                                        <b><?php echo $gia_sp ?></b>
                                        <!-- <del>4565466$</del> -->
                                        <!-- <div class="sale_vht">
                                    -30<span>%</span>
                                </div> -->
                                </div>

                                <div class="sz_pr">
                                    <p class="sz_ctpr">Size:</p>
                                    <div class="bnt_si">
                                        <select name="kichthuoc" id="">
                                            <?php foreach ($listsanpham as $bienthe) {
                                                extract($bienthe);
                                                echo ' <option name="kichthuoc" value="' . $bienthe['size'] . '">' . $bienthe['size'] . '</option> ';
                                                // echo '     <button>' . $size . '</button>';
                                            } ?>
                                        </select>
                                    </div>
                                </div>
                                <!-- -->
                                <div class="sl_pr">
                                    <div class="sl_tl">
                                        <p class="sl_ctpr">
                                            Số lượng:
                                        </p>
                                    </div>

                                    <div class="bnt_dl">
                                        <input class="bnt_adtr2" id="giam-sl" type="button" value="-">

                                        <input class="text_tt" id="quantityInput" type="number" value="1" min="0" max="50" name="soluong">

                                        <input class="bnt_adtr" id="tang-sl" type="button" value="+">
                                    </div>

                                </div>
                                <div class="tile_sp">
                                    <p>Sản phẩm có sẵn: <span style="color: red;"><?php echo $soluong ?> sản phẩm</span></p>
                                </div>

                                <div class="nut">
                                    <input type="hidden" name="id" value="<?php echo $_sp ?>">
                                    <input type="hidden" name="name" value="<?php echo $ten_sp ?>">
                                    <input type="hidden" name="img" value="<?php echo $hinh ?>">
                                    <input type="hidden" name="price" value="<?php echo $gia_sp ?>">

                                </div>
                                <div class="bnt_addbuy">
                                    <input type="submit" value="Thêm vào giỏ hàng" name="addtocart">
                                    <input type="submit" value="Mua ngay" name="addtocart">
                                </div>
                            </form>
                            <div class="tt_bton">
                                <p class="tt_bt">
                                    <i class="fa fa-hand-o-right" aria-hidden="true"></i> Funny-Family đảm bảo:
                                    <span style="font-size: 18px; font-weight:100;">hoàn
                                        trả tiền trong 3 ngày từ lúc nhận
                                        hàng.</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="mota">
                <h4 style="margin: 10px 0px;">
                    Mô tả sản phẩm
                </h4>
                <p><?= $mota ?></p>
            </div>
        </div>
        <div class="coment">
            <h3>Bình luận</h3>
            <div class=" comemt_lpr">
                <div class="chitietblsp">
                    <div class="conttt">
                        <center>
                            <table class="tab_bl">
                                <thead>
                                    <tr>
                                        <th class="thead">
                                            <h2>User</h2>
                                        </th>
                                        <th class="tbod">
                                            <h2>Nội dung bình luận</h2>
                                        </th>
                                        <th class="tbody">
                                            <h2>Ngày bình luận</h2>
                                        </th>
                                    </tr>
                                </thead>
                                <?php foreach ($binhluan as $value) :
                                    extract($value);
                                ?>
                                    <tbody>
                                        <tr class="chambl">
                                            <td><?= $ten_tk ?></td>
                                            <td><?= $noidung ?> </td>
                                            <td class="ngbl"><?= $ngaybinhluan ?></td>
                                        </tr>

                                        </tr>
                                    </tbody>
                                <?php endforeach; ?>
                            </table>
                        </center>

                    </div>

                </div>

            </div>
        </div>
        <div class="row_bl" id="binhluan">
            <form novalidate="" class="comment-form" id="commentform" action="index.php?act=sanphamct&id_sp=<?= $id_sp ?>" method="POST">
                <?php if (isset($_SESSION['user'])) {
                    $user = $_SESSION['user']; ?>
                    <p class="comment-form-comment">
                        <label for="comment">Bình luận :</label>
                        <br>
                        <input type="text" name="noidung" id="comment">
                        <!-- <textarea aria-required="true" rows="8" cols="45" name="noidung" id="comment"></textarea> -->
                    </p>
                    <p class="form-submit">
                        <input type="hidden" name="id_sp" value="<?= $id_sp ?>">
                        <input type="submit" value="GỬI" class="submit" id="submit" name="guibinhluan">
                    </p>
                <?php } else { ?>
                    <div>
                        <?php
                        echo '<a href="index.php?act=dangnhap"><h6 style="color:red;">** Đăng nhập để bình luận</h6></a>';
                        ?>
                    </div>
                <?php } ?>
            </form>
        </div>
    </div>
    <div class="content_top">
        <div class="title">
            <h2 class="tile_ctsp_pr">CÓ THỂ BẠN CŨNG THÍCH</h2>
        </div>
        <div class="row_pr">
            <?php foreach ($spnew as $sp) {
                extract($sp);
                $hinhpath = "uploads/" . $hinh;
                $linksp = "index.php?act=sanphamct&id_sp=" . $id_sp;
                echo ' <form action="index.php?act=addcart" method="post"> <div class="rol_pr">
                    <a href="' . $linksp . '"> <img src="' . $hinhpath . '" alt=""><br>   </a>
                    <div class="cnt_nddp"><p>' . $ten_sp . ' </p><br></div>
                    <div class="cnt_prsp"> <span class="cnt_prsp3">Giá: ' . $gia_sp . 'đ</span>  <span class="cnt_prsp4">Lượt bán: ' . $gia_sp . '</span></div>
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
    <div class="phantranfid_nut">
        <a class="all_pr" href="index.php?act=danhmucsp">Xem thêm</a>
    </div>
</div>

<script src="js/slide_ct.js"></script>
<script src="js/bnt_sl.js">
</script>

<style>
    .coment {
        margin-top: 20px;
        padding: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .tab_bl {
        width: 100%;
        border-collapse: collapse;
        margin-top: 15px;
    }

    .thead,
    .tbod,
    .tbody {
        text-align: left;
        padding: 10px;
        border-bottom: 1px solid #ccc;
    }

    .chambl td {
        background-color: #f9f9f9;
    }

    #binhluan {
        margin-top: 20px;
    }

    .comment-form {
        margin-top: 15px;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input[type="text"] {
        width: 100%;
        padding: 8px;
        box-sizing: border-box;
    }

    .submit {
        background-color: #4caf50;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    /* General Styles */
    .coment {
        margin-top: 20px;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 8px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h3 {
        color: #333;
    }

    /* Table Styles */
    .tab_bl {
        width: 100%;
        border-collapse: collapse;
        margin-top: 15px;
    }

    .thead,
    .tbod,
    .tbody {
        text-align: left;
        padding: 12px;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
        color: #555;
    }

    .chambl td {
        background-color: #f9f9f9;
    }

    /* Comment Form Styles */
    #binhluan {
        margin-top: 20px;
    }

    .comment-form {
        margin-top: 20px;
        background-color: #f5f5f5;
        padding: 15px;
        border-radius: 8px;
    }

    label {
        display: block;
        margin-bottom: 8px;
        color: #333;
    }

    input[type="text"] {
        width: 100%;
        padding: 10px;
        box-sizing: border-box;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .submit {
        background-color: #4caf50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .submit:hover {
        background-color: #45a049;
    }

    /* Message Styles */
    .form-submit h6 {
        color: #ff0000;
        margin: 10px 0;
    }

    /* Responsive Styles */
    @media (max-width: 600px) {
        .comment-form input[type="text"] {
            width: calc(100% - 20px);
        }
    }

    /* General Styles */
    .coment {
        margin-top: 20px;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 8px;
        background-color: #f8f8f8;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

    h3 {
        color: #333;
        text-align: center;
        font-size: 1.5em;
    }

    /* Table Styles */
    .tab_bl {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .thead,
    .tbod,
    .tbody {
        text-align: left;
        padding: 15px;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
        color: #555;
    }

    .chambl td {
        background-color: #f5f5f5;
    }

    .ngbl {
        font-style: italic;
        color: #888;
    }

    /* Comment Form Styles */
    #binhluan {
        margin-top: 20px;
    }

    .comment-form {
        margin-top: 20px;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

    .comment-form label {
        display: block;
        margin-bottom: 10px;
        color: #333;
    }

    .comment-form input[type="text"] {
        width: 100%;
        padding: 15px;
        box-sizing: border-box;
        border: 1px solid #ddd;
        border-radius: 5px;
        margin-bottom: 15px;
        transition: border-color 0.3s ease;
    }

    .comment-form input[type="text"]:focus {
        border-color: #5cb85c;
    }

    .comment-form .submit {
        background-color: #3498db;
        color: #fff;
        padding: 15px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .comment-form .submit:hover {
        background-color: #2980b9;
    }

    /* Message Styles */
    .form-submit h6 {
        color: #ff0000;
        margin: 10px 0;
    }

    /* Responsive Styles */
    @media (max-width: 600px) {
        .comment-form input[type="text"] {
            width: calc(100% - 20px);
        }
    }

    /* General Styles */
    .coment {
        margin-top: 30px;
        padding: 20px;
        border: 1px solid #e0e0e0;
        border-radius: 10px;
        background-color: #f9f9f9;
    }

    h3 {
        color: #333;
        text-align: center;
        font-size: 1.8em;
        margin-bottom: 20px;
    }

    /* Table Styles */
    .tab_bl {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .thead,
    .tbod,
    .tbody {
        text-align: left;
        padding: 15px;
        border-bottom: 1px solid #e0e0e0;
        font-weight: bold;
        color: #555;
    }

    .chambl td {
        background-color: #fafafa;
    }

    .ngbl {
        font-style: italic;
        color: #888;
    }

    /* Comment Form Styles */
    #binhluan {
        margin-top: 30px;
    }

    .comment-form {
        margin-top: 20px;
    }

    .comment-form label {
        display: block;
        margin-bottom: 10px;
        color: #555;
    }

    .comment-form input[type="text"] {
        width: 100%;
        padding: 15px;
        box-sizing: border-box;
        border: 1px solid #e0e0e0;
        border-radius: 5px;
        margin-bottom: 15px;
        transition: border-color 0.3s ease;
    }

    .comment-form input[type="text"]:focus {
        border-color: #3498db;
    }

    .comment-form .submit {
        background-color: #3498db;
        color: #fff;
        padding: 15px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .comment-form .submit:hover {
        background-color: #2980b9;
    }

    /* Message Styles */
    .form-submit h6 {
        color: #ff0000;
        margin: 10px 0;
    }

    /* Responsive Styles */
    @media (max-width: 600px) {
        .comment-form input[type="text"] {
            width: calc(100% - 20px);
        }
    }

    /* General Styles */
    .coment {
        margin-top: 30px;
        padding: 20px;
        border: 1px solid #e0e0e0;
        border-radius: 10px;
        background-color: #f9f9f9;
    }

    h3 {
        color: #333;
        text-align: center;
        font-size: 2.5em;
        margin-bottom: 20px;
    }

    /* Table Styles */
    .tab_bl {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .thead,
    .tbod,
    .tbody {
        text-align: left;
        padding: 20px;
        border-bottom: 1px solid #e0e0e0;
        font-weight: bold;
        color: #555;
    }

    .chambl td {
        background-color: #fafafa;
    }

    .ngbl {
        font-style: italic;
        color: #888;
    }

    /* Comment Form Styles */
    #binhluan {
        margin-top: 30px;
    }

    .comment-form {
        margin-top: 20px;
    }

    .comment-form label {
        display: block;
        margin-bottom: 15px;
        color: #555;
        font-size: 1.2em;
    }

    .comment-form input[type="text"] {
        width: 100%;
        padding: 15px;
        box-sizing: border-box;
        border: 1px solid #e0e0e0;
        border-radius: 5px;
        margin-bottom: 20px;
        font-size: 1.2em;
        transition: border-color 0.3s ease;
    }

    .comment-form input[type="text"]:focus {
        border-color: #3498db;
    }

    .comment-form .submit {
        background-color: #3498db;
        color: #fff;
        padding: 15px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 1.2em;
        transition: background-color 0.3s ease;
    }

    .comment-form .submit:hover {
        background-color: #2980b9;
    }

    /* Message Styles */
    .form-submit h6 {
        color: #ff0000;
        margin: 15px 0;
        font-size: 1.2em;
    }

    /* Responsive Styles */
    @media (max-width: 600px) {
        .comment-form input[type="text"] {
            width: calc(100% - 20px);
        }
    }

    /* General Styles */
    .coment {
        margin-top: 30px;
        padding: 20px;
        border: 1px solid #e0e0e0;
        border-radius: 10px;
        background-color: #f9f9f9;
    }

    h3 {
        color: #333;
        text-align: center;
        font-size: 2.5em;
        margin-bottom: 20px;
    }

    /* Table Styles */
    .tab_bl {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .thead,
    .tbod,
    .tbody {
        text-align: center;
        padding: 20px;
        border-bottom: 1px solid #e0e0e0;
        font-weight: bold;
        color: #555;
    }

    .chambl td {
        background-color: #fafafa;
    }

    .ngbl {
        font-style: italic;
        color: #888;
    }

    /* Comment Form Styles */
    #binhluan {
        margin-top: 30px;
    }

    .comment-form {
        margin-top: 20px;
    }

    .comment-form label {
        display: block;
        margin-bottom: 15px;
        color: #555;
        font-size: 1.2em;
        text-align: center;
    }

    .comment-form input[type="text"] {
        width: 100%;
        padding: 15px;
        box-sizing: border-box;
        border: 1px solid #e0e0e0;
        border-radius: 5px;
        margin-bottom: 20px;
        font-size: 1.2em;
        text-align: center;
        transition: border-color 0.3s ease;
    }

    .comment-form input[type="text"]:focus {
        border-color: #3498db;
    }

    .comment-form .submit {
        background-color: #3498db;
        color: #fff;
        padding: 15px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 1.2em;
        text-align: center;
        transition: background-color 0.3s ease;
    }

    .comment-form .submit:hover {
        background-color: #2980b9;
    }

    /* Message Styles */
    .form-submit h6 {
        color: #ff0000;
        margin: 15px 0;
        font-size: 1.2em;
        text-align: center;
    }

    /* Responsive Styles */
    @media (max-width: 600px) {
        .comment-form input[type="text"] {
            width: calc(100% - 20px);
        }
    }

    /* General Styles */
    .coment {
        margin-top: 30px;
        padding: 20px;
        border: 1px solid #e0e0e0;
        border-radius: 10px;
        background-color: #f9f9f9;
    }

    h3 {
        color: #333;
        text-align: center;
        font-size: 2.5em;
        margin-bottom: 20px;
    }

    /* Table Styles */
    .tab_bl {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .thead,
    .tbod,
    .tbody {
        text-align: center;
        padding: 20px;
        border-bottom: 1px solid #e0e0e0;
        font-weight: bold;
        color: #555;
    }

    .chambl td {
        background-color: #fafafa;
    }

    .ngbl {
        font-style: italic;
        color: #888;
    }

    /* Comment Form Styles */
    #binhluan {
        margin-top: 30px;
    }

    .comment-form {
        margin-top: 20px;
    }

    .comment-form label {
        display: block;
        margin-bottom: 15px;
        color: #555;
        font-size: 1.2em;
        text-align: center;
    }

    .comment-form input[type="text"] {
        width: 100%;
        padding: 15px;
        box-sizing: border-box;
        border: 1px solid #e0e0e0;
        border-radius: 5px;
        margin-bottom: 20px;
        font-size: 1.2em;
        text-align: center;
        transition: border-color 0.3s ease;
    }

    .comment-form input[type="text"]:focus {
        border-color: #3498db;
    }

    .comment-form .submit {
        background-color: #3498db;
        color: #fff;
        padding: 15px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 1.2em;
        text-align: center;
        transition: background-color 0.3s ease;
    }

    .comment-form .submit:hover {
        background-color: #2980b9;
    }

    /* Message Styles */
    .form-submit h6 {
        color: #ff0000;
        margin: 15px 0;
        font-size: 1.2em;
        text-align: center;
    }

    /* Responsive Styles */
    @media (max-width: 600px) {
        .comment-form input[type="text"] {
            width: calc(100% - 20px);
        }
    }

    /* Additional Styles for Content Text */
    .conttt {
        text-align: center;
    }

    .tab_bl td {
        text-align: center;
        font-size: 1.2em;
    }
</style>