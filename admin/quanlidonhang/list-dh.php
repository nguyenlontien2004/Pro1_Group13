<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alert - Mazer Admin Dashboard</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css7122?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../../css/style3.css">
    <link rel="stylesheet" href="../assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/app.css">
    <link rel="shortcut icon" href="../assets/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <div id="main">
        <div class="page-heading">
            <section class="section">
                <div class="row" id="table-bordered">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">DANH SACH DANH MUC</h4>
                            </div>
                            <div class="card-content">
                                <!-- table bordered -->
                                <div class="table-responsive">
                                    <form action="#" method="post">
                                        <div class="card-body">
                                            <table id="datatablesSimple">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th>ID</th>
                                                        <th>Khach hang</th>
                                                        <th>Sản phẩm</th>
                                                        <th>Trạng Thái</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($listhoadon as $bill) {
                                                        extract($bill);
                                                    ?>
                                                        <tr>
                                                            <td></td>
                                                            <td><?= $bill['id'] ?></td>
                                                            <td><?= $bill['hoten'] ?></td>
                                                            <td>
                                                                <?php foreach ($bill['products'] as $product) { ?>
                                                                    <p><?= $product['tensp'] ?></p>
                                                                <?php } ?>
                                                            </td>
                                                            <td>
                                                                <select class="select-trangthai" data-id="<?= $bill['id'] ?>">
                                                                    <?php foreach ($tatcatrangthai as $trangthai) {  ?>
                                                                        <option value="<?= $trangthai['code'] ?>" <?= $bill['trangthai'] == $trangthai['code'] ?
                                                                                                                        'selected' : '' ?>><?= $trangthai['name'] ?></option>
                                                                    <?php } ?>
                                                                </select>

                                                            </td>
                                                            <td></td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>

</html>
<script>
    $(document.body).on('change', ".select-trangthai", function(e) {

        var optVal = $(this).find('option:selected').val();
        var params = {
            id: $(this).data('id'),
            trangthai: optVal
        };
        $.post("index.php?act=suatrangthaidonhang", params, function(data, status) {

        });
    });
</script>