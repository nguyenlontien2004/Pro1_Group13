<?php
// Hàm lấy dữ liệu với phân trang và lọc
$conn = pdo_get_connection();
function getFilteredProducts($pdo, $page, $perPage, $category = null)
{
    $offset = ($page - 1) * $perPage;
    $query = "SELECT * FROM sanpham";

    // Thêm điều kiện lọc nếu có
    if ($category !== null) {
        $query .= " WHERE ten_sp = :ten_sp";
    }

    $query .= " LIMIT :perPage OFFSET :offset";

    $statement = $pdo->prepare($query);
    $statement->bindParam(':perPage', $perPage, PDO::PARAM_INT);
    $statement->bindParam(':offset', $offset, PDO::PARAM_INT);

    // Bỏ chặn tham số lọc nếu có
    if ($category !== null) {
        $statement->bindParam(':ten_sp', $category, PDO::PARAM_STR);
    }

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

// Số sản phẩm trên mỗi trang
$perPage = 10;

// Trang hiện tại
$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;

// Lọc theo danh mục nếu được chọn
$selectedCategory = isset($_GET['ten_sp']) ? $_GET['ten_sp'] : null;

// Lấy dữ liệu với phân trang và lọc
$products = getFilteredProducts($pdo, $currentPage, $perPage, $selectedCategory);

// Hiển thị dữ liệu
foreach ($products as $product) {
    echo "<h2>{$product['ten_sp']}</h2>";
    echo "<p>{$product['gia_sp']}</p>";
 
}
?>

<!-- Hiển thị form lọc và link phân trang -->
<form method="GET" action="">
    <label for="category">Filter by Category:</label>
    <select name="ten_sp" id="category">
        <option value="">All Categories</option>
        <!-- Populate categories from your database or provide a predefined list -->
        <option value="category1">Category 1</option>
        <option value="category2">Category 2</option>
    </select>
    <input type="submit" value="Filter">
</form>

<?php
// Hiển thị link phân trang
$totalProducts = $pdo->query("SELECT COUNT(*) FROM products")->fetchColumn();
$totalPages = ceil($totalProducts / $perPage);

echo "<div class='pagination'>";
for ($i = 1; $i <= $totalPages; $i++) {
    echo "<a href='?page=$i&category=$selectedCategory'>$i</a> ";
}
echo "</div>";
?>
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
                        <form action="index.php?act=sanphamloc" method="post">
                            <div class="rol_loc">
                                <div class="tktheoten">
                                    <p class="thieu">Tìm kiếm theo tên:</p>
                                    <input type="text" name="kyw" placeholder="Tìm kiếm..">
                                </div>
                                <div class="tile_locth">
                                    <div class="xamcj">
                                        <p class="thieu">Thương hiệu:</p>
                                        <?php foreach ($dsdm as $dm) {
                                            extract($dm);
                                            echo ' <input class="xam" type="checkbox" name="id_dm" value="' . $id_dm . '">    ' . $ten_danhmuc . '<br>';
                                        } ?>
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

                    <?php foreach ($products as $sploc11) {
                        extract($sploc11);
                        $hinhpath = "uploads/" . $hinh;
                        $linksp = "index.php?act=sanphamct&id_sp=" . $id_sp;
                        echo ' <div class="rol_pr">
                        <a href="' . $linksp . '"> <img src="' . $hinhpath . '" alt=""><br>   </a>
                        <div class="cnt_nddp"><p>' . $ten_sp . ' </p><br></div>
                        <div class="cnt_prsp"> <span class="cnt_prsp3">Giá: ' . $gia_sp . 'đ</span>  <span class="cnt_prsp4">Lượt bán: ' . $gia_sp . '</span></div>
                             <div class="nut">
                                 <input type="button" value="Mua ngay">
                                 <div class="tes"></div>
                                 <input type="button" value="Thêm vào giỏ hàng">
                             </div>
                         </div>';
                    } ?>

                </div>
                <div class="phantranfid">
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
                </div>

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