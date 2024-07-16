<?php
function insert_taikhoan($email, $ten_tk, $sdt, $pass)
{
    $sql = "INSERT INTO taikhoan(email,ten_tk,sdt,pass) VALUES ('$email','$ten_tk','$sdt','$pass')";
    pdo_execute($sql);
}
function checkuser($ten_tk, $pass)
{
    $sql = "SELECT * FROM taikhoan WHERE ten_tk='" . $ten_tk . "' AND pass='" . $pass . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function checkpassnew($pass)
{
    $sql = "SELECT * FROM taikhoan WHERE pass='" . $pass . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function update_mk($id_tk, $pass, $passnew)
{
    $sql = "UPDATE taikhoan SET pass='" . $passnew . "'WHERE id_tk=" . $id_tk;
    pdo_execute($sql);
}

function update_taikhoan($id_tk, $ten_tk, $email, $hinh, $pass, $sdt, $diachi)
{
    $sql = "UPDATE taikhoan SET ten_tk='" . $ten_tk . "', hinh='" . $hinh . "', pass='" . $pass . "', email='" . $email . "', sdt='" . $sdt . "', diachi='" . $diachi . "' WHERE id_tk=" . $id_tk;
    pdo_execute($sql);
}
function checkemail($email)
{
    $sql = "SELECT * FROM taikhoan WHERE email = '" . $email . "'";
    $taikhoan = pdo_query_one($sql);
    return $taikhoan;
}
function loadall_khachhang()
{
    $sql = "SELECT * FROM taikhoan ORDER BY id_tk desc";
    $listkhachhang = pdo_query($sql);
    return $listkhachhang;
}
function delete_taikhoan($id)
{
    $sql = "DELETE FROM taikhoan WHERE user_id=" . $id;
    pdo_execute($sql);
}
function loadone_khachhang($id)
{
    $sql = "SELECT * FROM taikhoan WHERE user_id=" . $id;
    $dm = pdo_query_one($sql);
    return $dm;
}
