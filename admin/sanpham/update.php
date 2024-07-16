<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alert - Mazer Admin Dashboard</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css7122?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/app.css">
    <link rel="shortcut icon" href="../assets/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <?php
    if (is_array($sanpham)) {
        extract($sanpham);
    }
    $hinhpath = "../uploads/" . $hinh;
    if (is_file($hinhpath)) {
        $hinhsp = "<img src='$hinhpath' alt='' width='80'>";
    } else {
        $hinhsp = "khong co hinh";
    }
    $listdanhmuc = loadall_danhmuc();
    ?>
    <div id="main">
        <div class="page-heading">
            <section>
                <div class="row formtitel">
                    <h1> UPDATE SẢN PHẨM</h1>
                </div>
                <div class="row formconten">
                    <form action="index.php?act=update-sp" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <select class="form-select" aria-label="Default select example" name="iddm">
                                <option class="option" value="0">Danh Mục Sản Phẩm</option>
                                <?php foreach ($listdanhmuc as $danhmuc) {
                                    extract($danhmuc);
                                    $s = ($id_dm == $sanpham['id_dm']) ? "selected" : "";
                                    echo '<option value="' . $id_dm . '" ' . $s . '>' . $ten_danhmuc . '</option>';
                                } ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputText" class="form-label">Tên Sản Phẩm</label>
                            <input type="text" class="form-control" id="exampleInputText" name="tensp" value="<?= $ten_sp ?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputText" class="form-label">Giá Sản Phẩm</label>
                            <input type="text" class="form-control" id="exampleInputText" name="giasp" value="<?= $gia_sp ?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputText" class="form-label">Hình Ảnh Sản Phẩm</label>
                            <input type="file" class="form-control" id="exampleInputText" name="hinh" onchange="previewImage(this)">
                            <img id="imagePreview" src="<?= $hinhpath ?>" alt="Image Preview" style="max-width: 100%; max-height: 200px; margin-top: 10px;">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputText" class="form-label">Kích Cỡ Sản Phẩm</label>
                            <input type="number" class="form-control" id="exampleInputText" min="35" max="42" name="size" value="<?= $size ?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputText" class="form-label">Số Lượng Sản Phẩm</label>
                            <input type="number" class="form-control" id="exampleInputText" min="0" name="soluong" value="<?= $soluong ?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Mô Tả Sản Phẩm</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="mota"><?= $mota ?></textarea>
                        </div>
                        <input type="hidden" name="id" value="<?= $id_sp ?>">
                        <button type="submit" class="btn btn-primary" name="capnhat">Submit</button>
                    </form>
                </div>
                <?php
                if (isset($thongbao) && ($thongbao != "")) {
                    echo '<div class="alert alert-success" role="alert">' . $thongbao . '</div>';
                }
                ?>
        </div>
        </section>
    </div>
    </div>
</body>

</html>