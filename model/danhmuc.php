<?php
function insert_danhmuc($tendm)
{
    $sql = "INSERT INTO danhmuc(ten_dm) VALUES('$tendm')";
    pdo_execute($sql);
}
function delete_danhmuc($id)
{
    $sql = "DELETE FROM danhmuc WHERE id_dm=" . $id;
    pdo_execute($sql);
}
function sodm()
{
    $sql = "SELECT COUNT(id_dm) as soDanhmuc
            FROM danhmuc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}
function loadall_danhmuc()
{
    $sql = "SELECT danhmuc.*, COUNT(sanpham.id_sp) AS soLuongSanPham
    FROM danhmuc
    LEFT JOIN sanpham ON danhmuc.id_dm = sanpham.id_dm
    GROUP BY danhmuc.id_dm
    ORDER BY danhmuc.id_dm DESC";
    $listdanhmuc = pdo_query($sql);

    return $listdanhmuc;
}
function loadall_danhmuc_footer()
{
    $sql = "SELECT * FROM danhmuc  ORDER BY id_dm desc limit 0,5";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}
function loadall_danhmuc_footer2()
{
    $sql = "SELECT * FROM danhmuc  ORDER BY id_dm desc limit 5,10";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}
function loadone_danhmuc($id)
{
    $sql = "SELECT * FROM danhmuc WHERE id_dm=" . $id;
    $dm = pdo_query_one($sql);
    return $dm;
}
function update_danhmuc($id, $tendm)
{
    $sql = "UPDATE danhmuc SET ten_dm = '" . $tendm . "' WHERE id_dm = " . $id;
    pdo_execute($sql);
}

function load_ten_dm($iddm)
{
    if ($iddm > 0) {
        $sql = "SELECT * FROM danhmuc WHERE id_dm =" . $iddm;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $ten_dm;
    } else {
        return "";
    }
}