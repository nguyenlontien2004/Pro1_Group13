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
    if (is_array($danhmuc)) {
        extract($danhmuc);
    }
    ?>
    <div id="main">
        <div class="page-heading">
            <section>
                <div class="row formtitel">
                    <h1> Cập nhật name category <?php if (isset($ten_danhmuc) && ($ten_danhmuc != "")) echo $ten_danhmuc ?> </h1>
                </div>
                <div class="row formconten">
                    <form action="index.php?act=update-dm" method="POST">
                        <div class="mb-3">
                            <label for="exampleInputText" class="form-label">ID Danh Mục</label>
                            <input type="text" class="form-control" id="exampleInputText" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputText" class="form-label">Tên Danh Mục</label>
                            <input type="text" class="form-control" id="exampleInputText" name="tendm" value="<?php if (isset($ten_danhmuc) && ($ten_danhmuc != "")) echo $ten_danhmuc ?>">
                        </div>
                        <input type="hidden" name="id" value="<?php if (isset($id_dm) && ($id_dm != "")) echo $id_dm ?>">
                        <button class="btn btn-primary"><input type="submit" value="submit" name="capnhat"></button>
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