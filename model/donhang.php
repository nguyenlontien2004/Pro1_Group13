<?php

function taodonhang($madh, $tongdonhang, $pttt, $hoten, $address, $ngaydathang, $email, $tell)
{
    $conn =  pdo_get_connection();
    $sql = "INSERT INTO tbl_order(madh,ngaydathang,tongdonhang,pttt,hoten,address,email,tell)  
    VALUES ('$madh','$ngaydathang','$tongdonhang','$pttt','$hoten','$address','$email','$tell')";
    $conn->exec($sql);
    $last_id = $conn->lastInsertId();
    $conn = null;
    return $last_id;
}
function addtocard($iddh, $idpro, $tensp, $img, $dongia, $soluong)
{
    $sql = "INSERT INTO tbl_cart(iddh,idpro,tensp,img,dongia,soluong)  
    values ('$iddh','$idpro','$tensp','$img','$dongia','$soluong')";
    pdo_execute($sql);
}
function getshowcart($iddh)
{

    $sql = "SELECT * FROM tbl_cart WHERE iddh = :iddh";

    $stmt = pdo_get_connection()->prepare($sql);

    $stmt->bindParam(':iddh', $iddh);

    $stmt->execute();

    $result = $stmt->fetchAll();

    return $result;
}

function getorderinfor($iddh)
{

    $sql = "SELECT * FROM tbl_order WHERE id = :iddh";

    $stmt = pdo_get_connection()->prepare($sql);

    $stmt->bindParam(':iddh', $iddh);

    $stmt->execute();

    $result = $stmt->fetchAll();

    return $result;
}


function update_trangthai($id, $trangthai)
{
    $sql = "UPDATE tbl_order SET trangthai='" . $trangthai . "'" . " WHERE  id=" . $id;
    pdo_execute($sql);
}


function loadall_hoadon()
{
    $sql = "SELECT * FROM tbl_order";
    $listorder = pdo_query($sql);
    foreach ($listorder as $key => $item) {
        $sql = "SELECT * FROM tbl_cart where iddh = " . $item['id'] ;
        $listproduct = pdo_query($sql);
        $listorder[$key]['products'] = $listproduct;
    }
    return  $listorder;
}

function loadone_bill($iddh)
{
    $sql = "select * from tbl_order where id= " . $iddh;
    $bill = pdo_query($sql);
    return $bill;
}
function huydh($id)
{
    $sql = "UPDATE tbl_order SET trangthai = donhangdahuy WHERE id =" . $id;
    pdo_execute($sql);
}
