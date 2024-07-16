<?php

function loadall_sanpham_home()
{
    $sql = "SELECT * FROM sanpham WHERE 1 ORDER BY id_sp desc limit 0,10";
    $listsanpham = pdo_query($sql);
    return  $listsanpham;
}
function loadall_sanpham_count()
{
    $sql = "SELECT COUNT(*) as total FROM sanpham";
    $result = pdo_query_one($sql);

    return $result['total'];
}

function loadall_sanpham($kyw = "", $id_dm = 0)
{
    $sql = "SELECT sanpham.*, COUNT(binhluan.id_bl) as soBinhLuan
            FROM sanpham LEFT JOIN binhluan ON binhluan.id_sp = sanpham.id_sp WHERE 1";

    if ($kyw != "") {
        $sql .= " AND sanpham.ten_sp LIKE '%" . $kyw . "%'";
    }

    if ($id_dm > 0) {
        $sql .= " AND sanpham.id_dm = '" . $id_dm . "'";
    }

    $sql .= " GROUP BY sanpham.id_sp
            ORDER BY sanpham.id_sp DESC";

    $listsanpham = pdo_query($sql);
    return $listsanpham;
}


function locsp($id_dm)
{
    $sql = "SELECT * FROM sanpham WHERE id_dm='$id_dm'";
    $locsp = pdo_query($sql);
    return $locsp;
}

function search_giay($keysword = "", $iddm)
{
    $sql = "select * from sanpham where 1";
    if ($keysword != "") {
        $sql .= " and ten_sp like '%" . $keysword . "%'";
    }
    if ($iddm > 0) {
        $sql .= " and id$iddm ='" . $iddm . "'";
    }
    $sql .= " order by id_sp desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}


function insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm)
{
    $sql = "INSERT INTO sanpham(ten_sp, gia_sp, hinh ,mota, id_dm) VALUES ('$tensp','$giasp', '$hinh','$mota','$iddm')";
    pdo_execute($sql);
}

function delete_sanpham($id)
{
    $sql = "DELETE FROM sanpham WHERE id_sp=" . $id;
    pdo_execute($sql);
}

function loadone_sanpham($id)
{
    $sql = "SELECT * FROM sanpham WHERE id_sp = $id";
    $sp = pdo_query_one($sql);
    return $sp;
}

function update_sanpham($id, $tensp, $iddm, $giasp, $mota, $hinh)
{
    if ($hinh != "") {
        $sql = "UPDATE sanpham SET ten_sp = '" . $tensp . "', id_dm = '" . $iddm . "', gia_sp = '" . $giasp . "',  mota = '" . $mota . "', hinh = '" . $hinh . "' WHERE id_sp = " . $id;
    } else {
        $sql = "UPDATE sanpham SET ten_sp = '" . $tensp . "', id_dm = '" . $iddm . "', gia_sp = '" . $giasp . "',  mota = '" . $mota . "' WHERE id_sp = " . $id;
    }
    pdo_execute($sql);
    // return $sql;
}
function loadall_sanpham_top10()
{
    $sql = "SELECT * FROM  sanpham WHERE 1 ORDER BY luotban desc limit 0,10";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function load_sanpham_cungloai($id, $iddm)
{
    $sql = "SELECT * FROM  sanpham WHERE id_dm = $iddm and id_sp <> $id";
    $result = pdo_query($sql);
    return $result;
}

function danhsach_sanpham()
{
    $sql = "SELECT * FROM  sanpham";
    $result = pdo_query($sql);
    return $result;
}
function oldimg($id)
{
    $sql = "SELECT hinh FROM sanpham WHERE id_sp =" . $id;
    $result = pdo_query_one($sql);

    if ($result && isset($result['hinh'])) {
        return "../uploads/" . $result['hinh'];
    }

    return null;
}

function add_sanpham($tendm)
{
    $sql = "INSERT INTO sanpham (`id_sp`) VALUES ('$tendm')";
    pdo_execute($sql);
}






function loadall_sanpham_home2()
{
    $sql = "SELECT * FROM sanpham WHERE 1 ORDER BY id_sp desc limit 0,15";
    $listsanpham = pdo_query($sql);
    return  $listsanpham;
}
function loadall_sanpham_loc()
{
    $sql = "SELECT * FROM sanpham WHERE 1 ORDER BY id_sp desc limit 0,9";
    $listsanpham = pdo_query($sql);
    return  $listsanpham;
}




// function loadone_sanpham($id_sp)
// {
//     $conn = pdo_get_connection();
//     $sql = "SELECT sanpham.ten_sp, bienthesize2.size, bienthesize2.soluong
//     FROM sanpham
//     INNER JOIN bienthesize2 ON sanpham.id_sp = bienthesize2.id_sp
//     WHERE sanpham.id_sp = :id_sp";

//     $stmt = $conn->prepare($sql);
//     $stmt->bindParam(':id_sp', $id_sp, PDO::PARAM_INT);
//     $stmt->execute();
//     // $sql = "SELECT * FROM sanpham WHERE id_sp = '$id_sp'";

//  }

// function loadall_bienthe()
// {
//     $pdo = pdo_get_connection();
//     $id_sp = $_GET['id_sp'];
//     $sql = "SELECT sanpham.ten_sp,sanpham.gia_sp,sanpham.hinh,sanpham.luotban,sanpham.mota,sanpham.id_dm,bienthesize2.id_bienthe,bienthesize2.size,bienthesize2.soluong FROM sanpham INNER JOIN bienthesize2 ON sanpham.id_sp = bienthesize2.id_sp WHERE 
//     sanpham.id_sp = :id_sp";
//     $stmt = $pdo->prepare($sql);
//     $stmt->bindParam(':id_sp', $id_sp, PDO::PARAM_INT);
//     $stmt->execute();
//     $listbt = pdo_query($sql);
//     return  $listbt;
// }
