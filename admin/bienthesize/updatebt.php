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
    if (is_array($bt)) {
        extract($bt);
    }
    $listbt = loadall_bt();
    ?>
    <div id="main">
        <div class="page-heading">
            <section>
                <div class="row formtitel">
                    <h1> UPDATE BIẾN THỂ</h1>
                </div>
                <div class="row formconten">
                    <form action="index.php?act=update-bt" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="exampleInputText" class="form-label">ID_sp</label>
                            <input type="text" class="form-control" id="exampleInputText" name="id_sp" value="<?= $id_sp ?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputText" class="form-label">Giá Sản Phẩm</label>
                            <input type="text" class="form-control" id="exampleInputText" name="size" value="<?= $size ?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputText" class="form-label">Số Lượng Sản Phẩm</label>
                            <input type="number" class="form-control" id="exampleInputText" min="0" name="soluong" value="<?= $soluong ?>">
                        </div>
                        <input type="hidden" name="id" value="<?= $id_bienthe ?>">
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