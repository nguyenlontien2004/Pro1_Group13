<?php
// function loadall_sanpham_home()
// {
//     $sql = "SELECT * FROM sanpham WHERE 1 ORDER BY id_sp desc limit 0,15";
//     $listsanpham = pdo_query($sql);
//     return  $listsanpham;
// }
// function loadall_sanpham_home2()
// {
//     $sql = "SELECT * FROM sanpham WHERE 1 ORDER BY id_sp desc limit 0,15";
//     $listsanpham = pdo_query($sql);
//     return  $listsanpham;
// }
// function loadall_sanpham_loc()
// {
//     $sql = "SELECT * FROM sanpham WHERE 1 ORDER BY id_sp desc limit 0,9";
//     $listsanpham = pdo_query($sql);
//     return  $listsanpham;
// }
// function loadall_sanpham_addbt()
// {
//     $sql = "SELECT sanpham.ten_sp,sanpham.id_sp,bienthesize2.size,bienthesize2.soluong,bienthesize2.id_bienthe
//     FROM sanpham
//     LEFT JOIN bienthesize2 ON bienthesize2.id_sp = sanpham.id_sp WHERE 1";
//     $sql .= "
//         ORDER BY bienthesize2.id_bienthe DESC";
//     $listbt = pdo_query($sql);
//     return $listbt;
// }
function loadall_bt()
{
    $sql = "SELECT * FROM  bienthesize2 WHERE 1";
    // if ($kyw != "") {
    //     $sql .= " AND sanpham.ten_sp LIKE '%" . $kyw . "%'";
    // }
    // if ($id_dm > 0) {
    //     $sql .= " AND sanpham.id_dm = '" . $id_dm . "'";
    // }
    $sql .= "
          ORDER BY bienthesize2.id_bienthe DESC";
    $listbt = pdo_query($sql);
    return $listbt;
}
function insert_bienthe($id_sp, $size, $soluong)
{
    $sql = "INSERT INTO bienthesize2(id_sp, size, soluong) VALUES ('$id_sp','$size','$soluong')";
    pdo_execute($sql);
}

function delete_bt($id)
{
    $sql = "DELETE FROM bienthesize2 WHERE id_bienthe=" . $id;
    pdo_execute($sql);
}

function loadone_bt($id_bienthe)
{
    $sql = "SELECT * FROM bienthesize2 WHERE id_bienthe = '$id_bienthe'";
    $sp = pdo_query_one($sql);
    return $sp;
}

function update_bt($id, $id_sp, $size, $soluong)
{
    $sql = "UPDATE bienthesize2 SET 	id_sp = '" . $id_sp . "' ,size = '" . $size . "', soluong = '" . $soluong . "'WHERE id_bienthe = " . $id;
    pdo_execute($sql);
}
// function loadall_sanpham_top10()
// {
//     $sql = "SELECT * FROM  sanpham WHERE 1 ORDER BY luotban desc limit 0,10";
//     $listsanpham = pdo_query($sql);
//     return $listsanpham;
// }

// function load_sanpham_cungloai($id, $iddm)
// {
//     $sql = "SELECT * FROM  sanpham WHERE id_dm = $iddm and id_sp <> $id";
//     $result = pdo_query($sql);
//     return $result;
// }

// function danhsach_bt()
// {
//     $sql = "SELECT * FROM  bienthesize";
//     $result = pdo_query($sql);
//     return $result;
// }

// function add_sanpham($tendm)
// {
//     $sql = "INSERT INTO sanpham (`id_sp`) VALUES ('$tendm')";
//     pdo_execute($sql);
// }