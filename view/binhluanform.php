<?php
$id_tk = $_REQUEST['id_tk'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <div class="coment" style="background-color: rgb(98, 99, 99); height: 300px;">
        <h3>Bình luận</h3>
        <form action="binhluanform.php" method="post">
            <input type="text" name="noidung">
            <input type="submit" name="guibinhluan" value="Gửi Bình Luận">
        </form>
    </div>
    <?php
    if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
        $noidung = $_POST['noidung'];
        insert_binhluan($noidung, $id_bl, $id_tk, $id_sp, $ngaybinhluan);
    }
    ?>
    <!-- <div class="comemt_lpr">
                <div class="chitietblsp">
                    <div class="conttt">
                        <table class="tab_bl">
                            <thead>
                                <tr>
                                    <th class="thead">User</th>
                                    <th class="tbod">Nội dung bình luận</th>
                                    <th class="tbody">Ngày bình luận</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Nguyễn Đức Chiến</td>
                                    <td>Nguyễn Đức Chiến jsbfjs jsfjsbjf bksbfk bksbfk ksfbks bkfsk ksbfks skbfs
                                        bskfbks ksbfksb ksfbks ksbkf sjbvjfds sjbfjs jsfj bjsfjd jsbf sjkfbsj
                                        skfbsk ksbfk djs bjsbsdh </td>
                                    <td class="ngbl">13-09-2000</td>
                                </tr>
                                <tr>
                                    <td>Nguyễn Đức Chiến</td>
                                    <td>Nguyễn Đức Chiến</td>
                                    <td class="ngbl">13-09-2000</td>
                                </tr>
                                <tr>
                                    <td>Nguyễn Đức Chiến</td>
                                    <td>Nguyễn Đức Chiến</td>
                                    <td class="ngbl">13-09-2000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> -->
</body>

</html>