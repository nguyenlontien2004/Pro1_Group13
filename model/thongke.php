<?php
function loadall_thongke()
{
    $sql = "select danhmuc.id_dm as madm, danhmuc.ten_danhmuc as tendm, count(sanpham.id_sp) as countsp, min(sanpham.gia_sp) as minprice, max(sanpham.gia_sp) as maxprice, avg(sanpham.gia_sp) as avgprice";
    $sql .= " from sanpham left join danhmuc on danhmuc.id_dm=sanpham.id_dm ";
    $sql .= " group by danhmuc.id_dm order by danhmuc.id_dm desc";
    $listthongke = pdo_query($sql);
    return $listthongke;
}
function loadall_sptop()
{
    $sql = " select sanpham.id_sp, sanpham.hinh, sanpham.ten_sp, sanpham.luotban from sanpham order by luotban desc limit 5 ";
    $listsptop = pdo_query($sql);
    return $listsptop;
}
